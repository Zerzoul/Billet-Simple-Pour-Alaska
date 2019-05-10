<?php
namespace framework;

class Manager{

    protected $pdo;
    protected $dsn;

    public function __construct($name, $host, $user, $pass){

        $this->setDSN($name, $host, $user, $pass);
        $this->initDbConnect();
    }

    public function setDSN($name, $host, $user, $pass){
        $this->dsn = array(
            'name' => $name,
            'host' => $host,
            'user' => $user,
            'pass' => $pass
        );
    }

    public function initDbConnect(){
        if($this->pdo === null){
            $pdo = new PDOManager($this->dsn);
            $pdo = $pdo->MYSQLConnect();
            $this->pdo = $pdo;
        } else {
            return ;
        }
    }

}