<?php
namespace framework;


class Route{


    private $_matches;
    private $_routes;
    private $_path;
    private $_function;
    private $_id = null;
    private $_type = null;

    public function __construct($routes){
        $this->_path = trim($routes['path'], '/');
        $this->_routes = $routes;
    }

    public function match($url){
        $url = trim($url, '/');
        $urlParse = explode('-', $url);

        $pathParse = explode('-',$this->_path);

        $regex = "#^$pathParse[0]$#i";
        if (!preg_match($regex, $urlParse[0], $matches)) {
            return false;
        }

        $regex = "#^$pathParse[0]$#i";
        if (!preg_match($regex, $urlParse[0], $matches)) {
            return false;
        }

        $this->_matches = $matches;
        for($i = 0; count($this->_routes)-1 > $i; $i++){
            $this->_function[] = $this->_routes[$i];
        }

        if(isset($urlParse[1])){
            $this->_type = $urlParse[1];
        }
        if(isset($urlParse[2])){
            $this->_id = $urlParse[2];
        }

        return true;
    }
    public function call(){
        return array(
            'path' => $this->_matches,
            'function' => $this->_function,
            'params' => [
                'type' => $this->_type,
                'id' => $this->_id,
                ]
        );
    }

}