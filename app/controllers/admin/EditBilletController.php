<?php


namespace controllers\admin;
require 'BilletController.php';

class EditBilletController extends BilletController{

    protected $addBilletOnly =  true;
    protected $buttonName =  'Ajouter';

    protected $updateStatue = null;
    protected $updateTitle = null;
    protected $updatePost = null;

    public function billetForm($type = null, $id = null){

        if(!is_null($type) && !is_null($id)){
            $this->updateBillet($type,$id);
        }


        $addBilletOnly = $this->addBilletOnly;

        $title = $this->form->input("text", "titleBillet",  $this->updateTitle, "form-control");
        $titleLabel = $this->form->label("Titre", "titleBillet");

        $contentBilletTextarea = $this->form->textarea("contentBillet", $this->updatePost);
        $submit = $this->form->submit($this->buttonName, "btn btn-info");

        require_once 'app/view/admin/Billets/addBillet.php';
    }

    public function updateBillet($type,$id){
        $this->addBilletOnly = false;
        $this->buttonName = 'Modifier';
        $table = $this->selectTable($type);
        $UpdateBillet = $this->getTheBillet($table, $id);
        if($UpdateBillet->isTrashed !== '0'){
            return;
        }

        $statue = $this->getTheStatue($UpdateBillet->statue);
        $this->updateStatue = $statue;
        $this->updateTitle = $UpdateBillet->title;
        $this->updatePost = $UpdateBillet->post;
    }

    public function checkNewBillet(){
        if(empty($_POST['type'])){

        }
        $table = $this->selectTable($_POST['type']);
        $title = $_POST['titleBillet'];
        $post = $_POST['contentBillet'];
        $statue = $_POST['statue'];

        $addBillet = $this->addBillet($table, $title, $post, $statue);
        if($addBillet){
            header('Location: billets');
        }
    }
    public function addBillet($table, $title, $post, $statue){
        $addBillet = $this->app->getManager('news');
        $addBillet = $addBillet->addBillet($table, $title, $post, $statue);

        if($addBillet){
            return true;
        } else {
            $error = 'Une erreur c\'est prodduite. Votre billet n\'a pas pu être enregistrer';
        }

    }


}