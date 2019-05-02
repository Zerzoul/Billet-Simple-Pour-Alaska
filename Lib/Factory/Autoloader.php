<?php

namespace Factory;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoloader'));
    }

    static public function autoloader($class_name){

        $class_name = str_replace(__NAMESPACE__.'\\', '', $class_name);
        $class_name = str_replace('\\', '/', $class_name);
        require __DIR__.'/'.$class_name.'.php';
    }
}