<?php
namespace framework;


class Page
{
    private $_call;
    protected $app;

    public function __construct($call, $app){
        $this->_call = $call;
        $this->app = $app;
    }

    public function build(){

        $function = $this->_call['function'];

        $param = null;
        if(isset($this->_call['id'])){
            $param = $this->_call['id'];
        }
        for($i = 0; $i <= count($function)-1;$i++){

            $getTheController = $this->app->getController($function[$i]['controller'], 'home');

            $method = $function[$i]['method'];
            $getTheController->$method($param);
        }

    }
}