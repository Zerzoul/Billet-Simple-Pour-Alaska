<?php

namespace controllers\home;


use framework\Controller;

class AuthentificationController extends Controller
{
    public function authForm(){

        $name = $this->form->input("text", "Utilisateur", "","auth_input");
        $nameLabel = $this->form->label("Utilisateur", "User");
        $pass = $this->form->input("password", "Mot de Passe", "","auth_input");
        $passLabel = $this->form->label("Mot de Passe", "Password");
        $submit = $this->form->submit("Se Connecter", "btn btn-info");
        $errorMessage = null;
        if(isset($_SESSION['POST_AUTH']) && !$_SESSION['POST_AUTH']){
            $errorMessage = '<div class="alert alert-danger" role="alert">'.$this->errorMessage.'</div>';
        }
        require 'app/view/home/Connexion/connect.php';
    }

}