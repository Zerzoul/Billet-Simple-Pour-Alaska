<?php
namespace framework;

class Routerex{

    protected $path; 
    protected $route;

    public function __construct($url){
        $this->setRoute($url);

    }

    public function setRoute($url){
            $this->route = $url;
    }

    public function getRoute(){
        switch($this->route){
            case 'new':
            $this->path = 'News/new';
            break;
            case 'episode':
            $this->path = 'Episodes/episode';
            break;
            case 'about':
            $this->path = 'About/about';
            break;
            case 'connect':
            $this->path = 'Connexion/connect';
            break;
            default:
                throw new \Exception('La page que vous tentez d\'ouvrir n\'existe pas');
        }
    }
    public function run(){
        if( $this->path == null){
            $this->getRoute();
        }
        require 'app/view/home/'. $this->path.'.php';
    }
}