<?php
namespace framework;

class Controller {

    protected $controller;
    protected $app;

    public function __construct($app){
        $this->app = $app;

        if(is_null($this->controller)){
            $split = explode('\\', get_class($this));
            $class_name = end($split);

            $this->controller = $class_name;
        }
        return $this->controller;
    }

}