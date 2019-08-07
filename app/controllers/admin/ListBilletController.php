<?php


namespace controllers\admin;
require_once 'BilletController.php';


class ListBilletController extends BilletController
{

    public function listBillet($type = null, $id = null){
        if(is_null($type)){
            $type = 'news';
        }
//
        $typeSelected = $type;
        $isTrashed = 0;

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




}