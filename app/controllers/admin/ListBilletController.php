<?php


namespace controllers\admin;
require_once 'BilletController.php';


class ListBilletController extends BilletController
{

    public function billetManager($type = null, $id = null){

        if(is_null($type)){
            $type = 'news';
        }
        $typeSelected = $type;


        if(!is_null($type)){
            $table = $this->selectTable($type);
            $listBillet = $this->displayAllBillet($table);

            if(!is_null($id)){
                $actionBillet = $this->getTheBillet($table, $id);
                $statue = $this->getTheStatue($actionBillet->statue);
            }
        }
        $isTypeNull = $this->isTypeNull;
        $isIdNull = $this->isIdNull;
        require 'app/view/admin/Billets/billets.php';
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



}