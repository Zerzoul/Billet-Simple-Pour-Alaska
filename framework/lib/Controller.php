<?php
namespace framework;

class Controller {

    protected $controller;
    protected $app;

    const NEWS_PATH = 'app/view/home/News/news.php';
    const NEW_PATH = 'app/view/home/News/new.php';
    const NEW_COMMENTS_PATH = 'app/view/home/News/newsComments.php';

    public function __construct($app){
        $this->app = $app;

        if(is_null($this->controller)){
            $split = explode('\\', get_class($this));
            $class_name = end($split);

            $this->controller = $class_name;
        }
        return $this->controller;
    }


}