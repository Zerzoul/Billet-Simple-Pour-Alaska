<?php


namespace controllers\admin;
require 'BilletController.php';

class EditBilletController extends BilletController{

    protected $addBilletOnly =  true;
    protected $buttonName =  'Ajouter';

    protected $updateStatue = null;
    protected $updateTitle = null;
    protected $updatePost = null;
    protected $updateDate = null;

    public function billetForm($type = null, $id = null){

        if(!is_null($type) && !is_null($id)){
            $this->loadForUpdateBillet($type,$id);
        }

        $addBilletOnly = $this->addBilletOnly;
        $statue = $this->updateStatue;

        $title = $this->form->input("text", "titleBillet",  $this->updateTitle, "form-control");
        $titleLabel = $this->form->label("Titre", "titleBillet");

        $contentBilletTextarea = $this->form->textarea("contentBillet", $this->updatePost);
        $submit = $this->form->submit($this->buttonName, "btn btn-info");

        require_once 'app/view/admin/Billets/addBillet.php';
    }

    public function loadForUpdateBillet($type,$id){
        $this->addBilletOnly = false;
        $this->buttonName = 'Modifier';
        $table = $this->selectTable($type);
        $updateBillet = $this->getTheBillet($table, $id);
        if($updateBillet->isTrashed !== '0'){
            return;
        }

        $this->updateStatue = $updateBillet->statue;
        $this->updateTitle = $updateBillet->title;
        $this->updatePost = $updateBillet->post;
    }

    public function checkBillet($type = null, $id = null){
        if(!is_null($type) && !is_null($id)){
            $this->addBilletOnly = false;
            $this->updateDate = date("Y-m-d H:i:s");
            $table = $this->selectTable($type);

        } else {
            $table = $this->selectTable($_POST['type']);
        }

        $title = $_POST['titleBillet'];
        $post = $_POST['contentBillet'];
        $statue = $_POST['statue'];

        if($this->addBilletOnly){
            $creatBillet = $this->addBillet($table, $title, $post, $statue);
        } else {
            $creatBillet = $this->updateBillet($id, $table, $title, $post, $statue, $this->updateDate);
        }

        if($creatBillet){
            header('Location: billets');
        }
    }




}