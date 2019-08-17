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
        $getUsers = $this->pdo->query('SELECT id, pseudo, date_sign,email FROM user ');
        $users = $getUsers->fetchAll(\PDO::FETCH_OBJ);
        return $users;
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