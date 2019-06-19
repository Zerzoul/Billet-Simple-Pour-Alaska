<?php


namespace models;
use \framework\Manager;

class UsersManager extends Manager
{

    public function getUsers(){
        $getUsers = $this->pdo->query('SELECT id, pseudo, email FROM user ');
        $users = $getUsers->fetchAll(\PDO::FETCH_OBJ);
        return $users;
    }
    public function countUsers(){
        $getUsers = $this->pdo->query('SELECT COUNT(*) AS counts FROM user ');
        $usersCount = $getUsers->fetch(\PDO::FETCH_LAZY );
        return $usersCount;
    }
    public function addUsers($pseudo,$email){
        $addUser = $this->pdo->prepare('INSERT INTO user(pseudo, email, statue) VALUES (:pseudo, :email, :statue)');
        $addUser->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'statue' => parent::USER_ACTIF,
        ));
        return $addUser;
    }
}