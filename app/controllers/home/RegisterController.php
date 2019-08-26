<?php
/**
 * Created by PhpStorm.
 * User: Zerzoul
 * Date: 26/08/2019
 * Time: 22:48
 */

namespace controllers\home;


use framework\Controller;

class RegisterController extends Controller
{
    public function registerForm(){

        $name = $this->form->input("text", "Nom d'utilisateur", "","auth_input");
        $nameLabel = $this->form->label("Nom d'utilisateur *", "User");
        $mail = $this->form->input("email", "Email", "","auth_input");
        $mailLabel = $this->form->label("Email *", "email");
        $pass = $this->form->input("password", "Mot de Passe", "","auth_input");
        $passLabel = $this->form->label("Mot de Passe *", "Password");
        $passConfirm = $this->form->input("password", "Mot de Passe", "","auth_input");
        $passConfirmLabel = $this->form->label("Mot de Passe Confirmation *", "Password");
        $submit = $this->form->submit("S'inscrire", "");
        $errorMessage = null;
        if(isset($_SESSION['POST_AUTH']) && !$_SESSION['POST_AUTH']){
            $errorMessage = '<div class="alert alert-danger" role="alert">'.$this->errorMessage.'</div>';
        }
        require 'app/view/home/Connexion/register.php';
    }
}