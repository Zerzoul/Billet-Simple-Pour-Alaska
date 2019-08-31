<?php


namespace models;
use \framework\Manager;

class UsersManager extends Manager
{

    public function countFromUsers(){
        $getUsers = $this->pdo->query('SELECT COUNT(c.author) AS userCount, u.id,u.pseudo, u.date_sign, u.email FROM newscomments c INNER JOIN user u ON u.pseudo = c.author GROUP BY u.pseudo ');
        $users = $getUsers->fetchAll(\PDO::FETCH_OBJ);
        return $users;
    }
    public function getUsers(){
        $getUsers = $this->pdo->query('SELECT id, pseudo, password, date_sign,email FROM user ');
        $users = $getUsers->fetchAll(\PDO::FETCH_OBJ);
        return $users;
    }
    public function getUser($name){
        $getUser = $this->pdo->prepare('SELECT id, pseudo, password, date_sign,email FROM user WHERE pseudo = :pseudo ');
        $getUser->execute(array(
            'pseudo' => $name,
        ));
        $user = $getUser->fetch(\PDO::FETCH_LAZY);
        var_dump($user);
        return isset($user) ? $user : false;

    }
    public function getAdminUser(){
        $getAdminUsers = $this->pdo->query('SELECT id, username, password, statue FROM adminmanagerusers ');
        $adminUsers = $getAdminUsers->fetchAll(\PDO::FETCH_OBJ);
        return $adminUsers;
    }
    public function countUsers(){
        $getUsers = $this->pdo->query('SELECT COUNT(*) AS counts FROM user ');
        $usersCount = $getUsers->fetch(\PDO::FETCH_LAZY );
        return $usersCount;
    }
    public function addAnonymeUsers($pseudo,$email){
        $addUser = $this->pdo->prepare('INSERT INTO user(pseudo, email, statue) VALUES (:pseudo, :email, :statue)');
        $addUser->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'statue' => parent::USER_ACTIF,
        ));
        return $addUser;
    }
    public function addRealUsers($pseudo, $passHash,$email){
        $addUser = $this->pdo->prepare('INSERT INTO user(pseudo, email, password,statue) VALUES (:pseudo, :email, :password,:statue)');
        $addUser->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => $passHash,
            'statue' => parent::USER_ACTIF,
        ));
        return $addUser;
    }
    public function updateUsers($pseudo, $passHash, $email){
        $updateUser = $this->pdo->prepare('UPDATE user SET pseudo = :pseudo, password = :password WHERE email = :email');
        $updateUser->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => $passHash,
        ));
        return $updateUser;
    }
}