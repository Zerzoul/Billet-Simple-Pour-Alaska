<?php
namespace framework;

class PDOManager{


    public static function MYSQLConnect(){

        $pdo = new \PDO('mysql:host=localhost;dbname=billetsimplepouralaska;charset:utf8', 'root', 'root');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}