<?php


namespace controllers\admin;
require_once 'BilletController.php';

class CommentsController extends BilletController {

    public function listComments(){
        $type = $this->type;
        $id = $this->id;
        $path = $this->path;

        $titleList = 'Listes des billets';
        if(is_null($type)){
            $type = 'news';
        }

        $typeSelected = $type;
        $isTrashed = 0;

        if(!is_null($type)){
            var_dump($type);
            $table = $this->selectTableComments($type);
            $listCom = $this->displayAllComments($table);

            if(!is_null($id)){
//                $actionBillet = $this->getTheBillet($table, $id, $isTrashed);
//                $statue = $this->getTheStatue($actionBillet->statue);
            }
        }
        $isTypeNull = $this->isTypeNull;
        $isIdNull = $this->isIdNull;
//        $bouton1 = 'Modification';
//        $linkAction1 = "update";
//        $bouton2 = 'Supprimer';
//        $linkAction2 = "billettodelete";

        require 'app/view/admin/Comments/comments.php';
    }

}