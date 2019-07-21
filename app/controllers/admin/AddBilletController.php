<?php


namespace controllers\admin;
require 'BilletController.php';

class AddBilletController extends BilletController{

    public function addBilletForm(){
        $title = $this->form->input("text", "titleBillet", "form-control");
        $titleLabel = $this->form->label("Titre", "titleBillet");

        $contentBilletTextarea = $this->form->textarea("contentBillet");
        $submit = $this->form->submit("submit", "btn btn-info");

        require 'app/view/admin/Billets/addBillet.php';
    }

}