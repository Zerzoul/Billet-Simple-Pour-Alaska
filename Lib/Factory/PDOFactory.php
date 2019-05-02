<?php

namespace Factory;

class PDOFactory{

    public static function getMysqlConnexion(){
        $db = new \PDO('mysql:host=localhost;dbname=billetsimplepouralaska', 'root', 'root');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}