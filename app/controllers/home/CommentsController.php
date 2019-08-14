<?php
namespace controllers\home;

class CommentsController extends \framework\Controller {

    protected $validator = 'ContentValidator.php';
    public function getCountCom(){
        $table = $this->selectTableComments(null);
        $coms = $this->app->getManager('comments');
        $coms = $coms->countComs($table, $this->id);
        return $coms;
    }
    public function getComs(){
        //TODO: fetch tous les commentaires liées à l'id du post
        $table = $this->selectTableComments(null);
        $coms = $this->app->getManager('comments');
        $coms = $coms->getComments($table, $this->id);

        return $coms;
//        foreach ($coms as $com){
//            var_dump($com);
//        }

    }
    public function addComment($id, $path){
        require $this->validator;

        $validator = new ContentValidator();
        $email = $validator->emailContent($_POST['email']);
        $comments = $validator->commentsContent($_POST['postComment']);

        $users = $this->app->getController('users', 'home', null);
        $author = $users->checkEmail($email);

        $coms = $this->app->getManager('comments');
        $coms->addComs($id, $author, $comments);

        header('location: /Billet-Simple-Pour-Alaska/'.$path.'-'.$id);

    }
    public function validate(){
        //TODO: vérifie l'authentisité et renvoie une erreur s'il y a des failles de sécurité
    }
    public function anonymeAuthor(){
        //TODO: s'il n'y a pas de compte utilisateur renvoie Anonyme + index userDb
    }


}