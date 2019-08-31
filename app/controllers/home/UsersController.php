<?php

namespace controllers\home;




class UsersController extends \framework\Controller
{
    public function getUser($email){
        $pseudoExist = $this->isTheEmailExist($email);
        if(!is_null($pseudoExist)){
            $pseudoAnonyme = $pseudoExist;
        } else {
            $pseudoAnonyme = $this->assignPseudo();
        }
        $this->addUser($pseudoAnonyme, $email);
        return $pseudoAnonyme;
    }
    public function assignPseudo(){
        $users = $this->app->getManager('Users');
        $userCount = $users->countUsers();
        $pseudoId = $userCount->counts + 1;
        $pseudo = 'Anonyme0'.$pseudoId;
        return $pseudo;
    }
    public function addUser($pseudo, $email){
        $users = $this->app->getManager('Users');
        return $users->addAnonymeUsers($pseudo, $email);
    }
    public function isTheEmailExist($email){
        $users = $this->app->getManager('Users');
        $users =  $users->getUsers();
        foreach ($users as $user){
            if($user->email === $email){
                //TODO other condition if the user is already register and loged in
                return $user->pseudo;
            }
        }
        return null;
    }
}