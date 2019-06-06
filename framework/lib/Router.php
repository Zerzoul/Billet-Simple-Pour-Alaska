<?php
namespace framework;

class Router{

    private $_url;
    private $_routes = [];

    public function __construct($url){
        $this->_url = $url;
    }

    public function getRoute($path, $controller, $method){
        $route = new Route($path, $controller, $method);
        $this->_routes[] = $route;
    }

    public function run(){

        if(!isset($this->_routes)){
            throw new \Exception(' Routes does not exist ');
        }
        foreach ($this->_routes as $route){
            if($route->match($this->_url)){
                return $route->call();
            }
        }
        throw new \Exception('No matching routes');
    }

}