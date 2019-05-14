<?php
namespace framework;

class PDOManager{

    protected $dsn;

    public function __construct($dsn){
        $this->setPDO($dsn);
    }

    public function setPDO($dsn){
        $this->dsn = $dsn;
    }

    public function MYSQLConnect(){
        $pdo = new \PDO('mysql:host='.$this->dsn['host'].';dbname='.$this->dsn['name'].';charset=utf8', $this->dsn['user'], $this->dsn['pass']);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}