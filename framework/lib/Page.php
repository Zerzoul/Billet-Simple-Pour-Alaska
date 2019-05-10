<?php
namespace framework;

class Page{

    protected $path; 
    protected $page;

    public function __construct($page){
        $this->setPage($page);
    }
    public function setPage($page){
        if ($page ){
            $this->page = $page;
        } else {
            throw new Exception('La page que vous tentez d\'ouvrir n\'existe pas');
        }
    }

    public function getPath(){
        switch($this->page){
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
                $this->path = 'News/news';
        }
    }
    public function getPage(){
        if( $this->path == null){
            $this->getPath();
        }
        require 'app/view/home/'. $this->path.'.php';
    }
}