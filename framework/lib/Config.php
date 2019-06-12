<?php
namespace framework;

class Config{

    private $_settings = [];
    private static $_instance;

    public function __construct($config){
        $this->_settings = require dirname(__DIR__).'/config/'.$config.'.php';
    }

    public static function getInstance($config){
        if(is_null(self::$_instance)){
            self::$_instance = new Config($config);
        }
        return self::$_instance;
    }

    public function get($key){
        if(!isset($this->_settings[$key])){
            return null;
        }
        return $this->_settings[$key];
    }
    public function getAll(){
        return $this->_settings;
}
}