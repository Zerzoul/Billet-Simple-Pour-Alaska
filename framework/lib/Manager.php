<?php
namespace framework;

class Manager{

    protected $pdo;
    protected $dsn = [];

    /*PUBLICATION STATUE POST*/
    const PUBLISHED = 1;
    const VALIDATION_BEFORE = 2;
    const ROUGH = 3;

    /*PUBLICATION STATUE COMS*/
    const COM_VALID = 4;
    const COM_IGNORE = 2;

    public function __construct($dsn = array(
        'name' => 'billetsimplepouralaska',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => 'root'
    )){
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