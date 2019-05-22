<?php
namespace framework;

class App{

    private static $_instance;
    private $_db_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getDb(){
        $config = Config::getInstance('dsn');
        if(is_null($this->_db_instance)){
            $db = new PDOManager($config->get('name'), $config->get('host'), $config->get('pass'), $config->get('user'));
            $this->_db_instance = $db->MYSQLConnect();
        }
        return $this->_db_instance;
    }
    public function getManager($name){
        $class = ucfirst($name).'Manager';
        $class_path = 'app/models/'.$class;
        $class_name = '\\models\\'.$class;

        require $class_path.'.php';
        return new $class_name($this->_db_instance);
    }

    //TODO: factory controler getController
}