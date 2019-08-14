<?php
namespace framework;

class Controller {

    protected $controller;
    protected $app;
    protected $form;
    private static $_instance;

    protected $id = null;
    protected $type = null;
    protected $path = null;

    const NEWS_PATH = 'app/view/home/News/news.php';
    const NEW_PATH = 'app/view/home/News/new.php';
    const NEW_COMMENTS_PATH = 'app/view/home/News/newsComments.php';

    public function __construct($app, $form, $params){
        $this->app = $app;
        $this->form = $form;

        // TODO revoir la securité de ID, il doit passer par une phase null
        if(is_array($params)){
            if(is_null($this->id)){
                $this->id = $params['id'];
            }
            $this->type = $params['type'];
            $this->path = $params['path'];
        }

        if(is_null($this->controller)){
            $split = explode('\\', get_class($this));
            $class_name = end($split);
            $this->controller = $class_name;
        }
        return $this->controller;
    }
    public function selectTable($type){
        if(!$type){
            $type = 'news';
        }
        return $type.'post';
    }
    public function selectTableComments($type){
        if(!$type){
            $type = 'news';
        }
        return $type.'comments';
    }

}