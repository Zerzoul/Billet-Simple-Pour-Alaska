<?php

namespace Factory;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoloader'));
    }

    static public function autoloader($class_name){
        require __DIR__.'/'.$class_name.'.php';
    }
}