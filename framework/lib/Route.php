<?php
namespace framework;


class Route{

    private $_path;
    private $_matches;
    private $_controller;
    private $_method;

    public function __construct($path, $controller, $method){
        $this->_path = trim($path,'/');
        $this->_controller = $controller;
        $this->_method = $method;
    }

    public function match($url){
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->_path);
        $regex = "#^$path$#i";
        if(!preg_match($regex, $url, $matches)){
            return false;
        }

        $this->_matches = $matches;
        return true;
    }
    public function call(){
        return array(
            'path' => $this->_matches,
            'controller' => $this->_controller,
            'method' => $this->_method,
        );
    }

}