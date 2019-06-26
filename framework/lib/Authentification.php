<?php

namespace framework;


class Authentification{

    protected $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

}