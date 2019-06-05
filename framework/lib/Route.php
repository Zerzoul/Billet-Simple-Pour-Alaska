<?php
namespace framework;


class Route{

    private $path;
    private $matches;
    private $controller;

    public function __construct($path, $controller){
        $this->path = trim($path,'/');
        $this->controller = $controller;
    }

    public function match($url){
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $regex = "#^$path$#i";
        if(!preg_match($regex, $url, $matches)){
            return false;
        }

        $this->matches = $matches;
        return true;
    }
    public function call(){
        return array(
            'path' => $this->matches,
            'controller' => $this->controller,
        );
    }

}