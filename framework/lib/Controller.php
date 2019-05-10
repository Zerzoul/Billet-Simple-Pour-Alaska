<?php
namespace framework;

class Controller {

    protected $path;
    protected $controller;

    public function __construct($name){
        $this->setController($name);
    }

    public function setController($name){
        $this->controller = $name;
    }

    

    public function getModel($model){
        require '../../app/models/'.$model;
    }

}