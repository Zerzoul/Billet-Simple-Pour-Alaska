<?php


namespace controllers\admin;
require 'BilletController.php';

class AddBilletController extends BilletController{
    public function billetForm(){
        $title = $this->form->input("text", "titleBillet", "form-control");
        $titleLabel = $this->form->label("Titre", "titleBillet");

//        $selectType = $this->form->selected("type", [
//            ["value" => "news"],
//            ["value" => "episodes"]
//        ]);

        $contentBilletTextarea = $this->form->textarea("contentBillet");
        $submit = $this->form->submit("submit", "btn btn-info");

        require_once 'app/view/admin/Billets/addBillet.php';
    }
    public function checkNewBillet(){
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