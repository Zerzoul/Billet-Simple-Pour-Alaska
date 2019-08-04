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

    public function build($direction){
        $function = $this->_call['function'];

        $params = null;
        $path = null;

        if(!empty($this->_call['params'])){

            $params = $this->_call['params'];
        }
        for($i = 0; $i <= count($function)-1;$i++){

            $getTheController = $this->app->getController($function[$i]['controller'], $direction);


            if(!is_null($function[$i]['method'])){
                $method = $function[$i]['method'];
                if(is_null($params['type']) && is_null($params['id'])){
                    $getTheController->$method();
                } else if(isset($params['type']) && count($params) === 1) {
                    $getTheController->$method($params['type']);
                } else if(isset($params['id']) && count($params) === 1) {
                    $getTheController->$method($params['id']);
                } else{
                    $getTheController->$method($params['type'], $params['id']);
                }
            }

        }

    }
}