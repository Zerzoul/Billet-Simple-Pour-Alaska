<?php


namespace controllers\admin;
require_once 'BilletController.php';

class DeleteBilletController extends BilletController{

    public function deleteBilletValidation($type, $id){
        $table = $this->selectTable($type);
        $news = $this->app->getManager('news');

        $isTrashed = $news->getTheBillet($table, $id);

        if($isTrashed->isTrashed !== '0'){
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

        if($isTrashed->isTrashed !== '0'){
            $news->deleteThisBillet($table, $id);
        }
        $news->trashThisBillet($table, $id);
        header('Location: billets');
    }

}