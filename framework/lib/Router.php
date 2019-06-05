<?php
namespace framework;

class Router{

    private $url;
    private $routes = [];

    public function __construct($url){
        $this->url = $url;
    }

    public function getRoute($path, $controller){
        $route = new Route($path, $controller);
        $this->routes[] = $route;
    }

    public function run(){
        if(!isset($this->routes)){
            throw new \Exception(' Routes does not exist ');
        }
        foreach ($this->routes as $route){
            if($route->match($this->url)){
                return $route->call();
            }
            throw new \Exception('No matching routes');
        }
    }

}