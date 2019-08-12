<?php
namespace framework;

class Controller {

    protected $controller;
    protected $app;
    protected $form;

    protected $id;
    protected $type;
    protected $path;

    const NEWS_PATH = 'app/view/home/News/news.php';
    const NEW_PATH = 'app/view/home/News/new.php';
    const NEW_COMMENTS_PATH = 'app/view/home/News/newsComments.php';

    public function __construct($app, $form, $params){
        $this->app = $app;
        $this->form = $form;

        if(is_array($params)){
            $this->id = $params['id'];
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


}