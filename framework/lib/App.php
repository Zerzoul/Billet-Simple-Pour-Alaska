<?php
namespace framework;

class App{

    private static $_instance;
    private $_db_instance;
    private $_routes;
    private $_formBuilder;
    private $_controller;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }
    public function initForm(){
        if(is_null($this->_formBuilder)){
            $form = new Form();
            $this->_formBuilder = $form;
        }
        return $this->_formBuilder;
    }

    public function initConfig($config){
        return new Config($config);
    }
    public function getDb(){
        $config = $this->initConfig('dsn');
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

        require_once $class_path.'.php';
        return new $class_name($this->getDb());
    }
    public function getController($name, $direction){
        $class = ucfirst($name).'Controller';
        $direction = strtolower($direction);
        $class_path = 'app/controllers/'.$direction.'/'.$class;
        $class_name = '\\controllers\\'.$direction.'\\'.$class;
        $form = $this->initForm();
        require_once $class_path.'.php';

        if($class != $this->_controller){
            $this->_controller = new $class_name(self::getInstance(), $form);
        }

        return $this->_controller;
    }
    public function initRouter($url, $routes){
        $routes = $this->initConfig($routes);
        $this->_routes = $routes->getAll();
        return new Router($url, $this->_routes);
    }
    public function getPage($call){
        if(!isset($call)){
            throw new \Exception('No page to build');
        }
        return new Page($call, self::getInstance());
    }





}
