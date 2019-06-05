<?php
namespace controllers\home;

class CommentsController extends \framework\Controller {

    public function getCountCom($id){

        $coms = $this->app->getManager('comments');
        $coms = $coms->countComs($id);
        return $coms;
    }
    public function getComs($id){
        //TODO: fetch tous les commentaires liées à l'id du post
    }
    public function addComment(){
        //TODO: ajoute un commentaire à la db
    }
    public function validate(){
        //TODO: vérifie l'authentisité et renvoie une erreur s'il y a des failles de sécurité
    }
    public function anonymeAuthor(){
        //TODO: s'il n'y a pas de compte utilisateur renvoie Anonyme + index userDb
    }


}