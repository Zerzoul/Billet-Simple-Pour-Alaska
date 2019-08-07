<?php


namespace controllers\admin;
require_once 'BilletController.php';

class DeleteBilletController extends BilletController{

    public function listTrashBillet($type = null, $id = null){

        if(is_null($type)){
            $type = 'news';
        }
        $typeSelected = $type;
        $isTrashed = 1;

        if(!is_null($type)){
            $table = $this->selectTable($type);
            $listBillet = $this->displayAllBillet($table, $isTrashed);

            if(!is_null($id)){
                $actionBillet = $this->getTheBillet($table, $id, $isTrashed);
                $statue = $this->getTheStatue($actionBillet->statue);
            }
        }
        $isTypeNull = $this->isTypeNull;
        $isIdNull = $this->isIdNull;
        require 'app/view/admin/Billets/billets.php';
    }


    public function deleteBilletValidation($type, $id){
        $table = $this->selectTable($type);
        $news = $this->app->getManager('news');

        $isTrashed = $news->getTheBillet($table, $id);

        if($isTrashed->isTrashed !== 0){
            $messageToValid = 'de supprimer définitivement :';
        } else {
            $messageToValid = 'de mettre à la corbeille :';
        }
        if($type === 'news'){
            $typeToDefine = 'La '.ucfirst($type);
        } else {
            $typeToDefine = 'L\' '.ucfirst($type);
        }

        $billetToDelete = $typeToDefine.' N° '.$id.' <span class="font-italic">"'.$isTrashed->title.'"</span>.';

        $id;
        $type;
        require 'app/view/admin/Billets/deleteBilletValidation.php';
    }
    public function deleteBillet($type, $id){
        if($_POST['validationDeleteBillet'] == 'Annuler'){
            header('Location: billets');
            return;
        }
        $table = $this->selectTable($type);
        $news = $this->app->getManager('news');
        $isTrashed = $news->getTheBillet($table, $id);

        if($isTrashed->isTrashed !== 0){
            $news->deleteThisBillet($table, $id);
        }
        $news->trashThisBillet($table, $id);
        header('Location: billets');
    }

}