<?php
namespace framework;

class Manager{

    protected $pdo;
    protected $dsn = [];

    public function __construct($dsn){
        $this->setDSN($dsn);
        $this->initDbConnect();
    }

    public function setDSN($dsn){
        $this->dsn = $dsn;
    }

    public function initDbConnect(){
        if($this->pdo === null){
            $pdo = new PDOManager($this->dsn);
            $pdo = $pdo->MYSQLConnect();
            $this->pdo = $pdo;
        } else {
            return $this->pdo;
        }
    }

}