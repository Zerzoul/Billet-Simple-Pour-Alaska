<?php
namespace controllers\admin;



class AuthentificationController extends \framework\Controller
{
    public function formLogin(){
        $name = $this->form->input("text", "userName", "","form-control");
        $nameLabel = $this->form->label("userName", "User");
        $pass = $this->form->input("password", "userPass", "","form-control");
        $passLabel = $this->form->label("userPass", "Password");
        $submit = $this->form->submit("submit", "btn btn-info");

        require 'app/view/admin/login/login.php';
    }

    public function access(){
        if(isset($_SESSION['admin'])){
             header("Location: dashboard");
        } else {
            header("Location: login");
        }

    }
    public function authValidator(){
        if(!isset($_POST['userName']) || !isset($_POST['userPass'])){
            throw new \Exception("You need to field the gap to be able to access the admin Manager");
        }
        $userName = $_POST['userName'];
        $userPass = $_POST['userPass'];

        $adminUser =  $this->app->getManager('users');
        $adminUser = $adminUser->getAdminUser();


        $isPasswordCorrect = password_verify($userPass, $adminUser[0]->password);
        if($isPasswordCorrect && $userName === $adminUser[0]->username){
            $_SESSION['admin'] = $adminUser[0]->username;
        }
        return $this->access();
    }

    public function deconnexion(){
        $_SESSION = [];
        session_destroy();

        return $this->access();
    }
}