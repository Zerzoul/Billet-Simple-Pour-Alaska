<?php


namespace controllers\admin;
require 'BilletController.php';


class ListBilletController extends BilletController
{

    public function billetManager($type = null, $id = null){
        if(!isset($_SESSION['admin'])) {
            header("Location: login");
            exit();
        }
        if(is_null($type)){
            $type = 'news';
        }
        $typeSelected = $type;

        if(!is_null($type)){
            $table = $this->selectTable($type);
            $listBillet = $this->displayAllBillet($table);

            if(!is_null($id)){
                $actionBillet = $this->checkBillet($table, $id);
                $statue = $this->getTheStatue($actionBillet->statue);
            }
        }
        $isTypeNull = $this->isTypeNull;
        $isIdNull = $this->isIdNull;
        require 'app/view/admin/Billets/billets.php';
    }
    public function displayAllBillet($table){
        $this->isTypeNull = false;
        $news = $this->app->getManager('news');
        return $news->getListBillet($table);

    }
    public function checkBillet($table, $id){
        $news = $this->app->getManager('news');
        $this->isIdNull = false;
        return $news->getTheBillet($table, $id);
    }

    public function selectTheType(){
        if($_POST['type'] === 'Type'){
            header('Location: billets');
        }
        elseif($_POST['type'] !== $this->type){
            $this->type = $_POST['type'];
        }
        header('Location: billets-'.$this->type);
    }
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

        $billetToDelete = $typeToDefine.' N° '.$id.' '.$isTrashed->title.'.';

        $id = $id;
        $type = $type;
        require 'app/view/admin/Billets/deleteBilletValidation.php';
    }
    public function deleteBillet($type, $id){
        $table = $this->selectTable($type);
        $news = $this->app->getManager('news');
        $isTrashed = $news->getTheBillet($table, $id);

        if($isTrashed->isTrashed !== '0'){
           var_dump($isTrashed->isTrashed);
        }
       $news->trashThisBillet($table, $id);

    }


}