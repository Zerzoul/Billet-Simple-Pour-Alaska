<?php
namespace controllers\home;

use mysql_xdevapi\Exception;

class CommentsController extends \framework\Controller {

    protected $validator = 'ContentValidator.php';
    public function getCountCom($table, $id){
        $coms = $this->app->getManager('comments');
        $coms = $coms->countComs($table, $id);
        return $coms;
    }
    public function getComs(){
        //TODO: fetch tous les commentaires liées à l'id du post
        $table = $this->selectTableComments(null);
        $coms = $this->app->getManager('comments');
        $coms = $coms->getComments($table, $this->id);

        return $coms;
    }
    public function addComment(){
        require $this->validator;
        $id =  $this->id;
        $type = $this->type;

        $validator = new ContentValidator();

        $email = $validator->emailContent($_POST['email']);
        $comments = $validator->commentsContent($_POST['postComment']);

        $users = $this->app->getController('users', 'home', null);
        $author = $users->checkEmail($email);

        $coms = $this->app->getManager('comments');

        $table = $this->selectTableComments($type === 'chapitre' ? 'episodes' : $type);
        $coms->addComs($table,$id, $author, $comments);

        header('location: /Billet-Simple-Pour-Alaska/'.$type.'-'.$id);
    }
    public function validate(){
        //TODO: vérifie l'authentisité et renvoie une erreur s'il y a des failles de sécurité
    }
    public function anonymeAuthor(){
        //TODO: s'il n'y a pas de compte utilisateur renvoie Anonyme + index userDb
    }
    public function report(){
        $table = $this->selectTableComments($this->type);
        $coms = $this->app->getManager('comments');
        $report = $coms->reportCom($table, $_POST['idCom'], 1);
        if(!$report){
            throw new \Exception('The reported can\'t be executed');
        }
        header('location: /Billet-Simple-Pour-Alaska/'.$this->type.'-'.$this->id);
    }

}