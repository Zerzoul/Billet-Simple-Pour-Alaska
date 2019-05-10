<?php
namespace framework;

class PDOManager{

    protected $db_name;
    protected $db_host;
    protected $db_user;
    protected $db_pass;

    public function __construct($dsn){
        $this->setPDO($dsn);
    }

    public function setPDO($dsn){
        $this->db_name = $dsn['name'];
        $this->db_host = $dsn['host'];
        $this->db_user = $dsn['user'];
        $this->db_pass = $dsn['pass'];
    }

    public function MYSQLConnect(){
        $pdo = new \PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset:utf8', $this->db_user, $this->db_pass);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}