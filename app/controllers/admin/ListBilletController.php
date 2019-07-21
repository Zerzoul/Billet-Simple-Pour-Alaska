<?php


namespace controllers\admin;
require 'BilletController.php';


class ListBilletController extends BilletController
{

    public function billetManager(){
        if(!isset($_SESSION['admin'])) {
            header("Location: login");
            exit();
        }
        if(!is_null($this->type)){
            $table = $this->type.'post';
            $listBillet = $this->displayAllBillet($table);
            $type = ucfirst($this->type);


            if(!is_null($this->id)){
                $actionBillet = $this->checkBillet($this->type,$this->id);
                $statue = $this->getTheStatue($actionBillet->statue);
            }
        }
        $isTypeNull = $this->isTypeNull;
        $isIdNull = $this->isIdNull;
        require 'app/view/admin/Billets/billets.php';
    }
    public function displayAllBillet($type){
        $news = $this->app->getManager('news');
        return $news->getListBillet($type);

    }
    public function checkBillet($type,$id){
        $news = $this->app->getManager('news');
        return $news->getTheBillet($type,$id);
    }
    public function getId($id){
        if(is_int($id)){
            $this->$id = $id;
        }
        $this->isIdNull = true;
        return $this->billetManager();
    }

    public function setType(){
        if($_POST['type'] !== $this->type){
            $this->type = $_POST['type'];
        }
        $this->isTypeNull = false;
        return $this->billetManager();
    }


}