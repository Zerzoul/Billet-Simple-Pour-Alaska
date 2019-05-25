<?php
namespace framework;

class Controller {

    protected $controller;

    public function __construct(){

        if(is_null($this->controller)){
            $split = explode('\\', get_class($this));
            $class_name = end($split);

            $this->controller = $class_name;
        }
        return $this->controller;
    }

}