<?php
namespace controllers\home;

class NewsController extends \framework\Controller {


    public function listNewsPost(){
        $table = $this->selectTable($this->path);

        $news = $this->app->getManager('news');
        $news = $news->getListNews($table, 'DESC');

        foreach($news as $new){
            $tableComs = $this->selectTableComments($this->path);
            $coms = $this->app->getController('comments', 'home', null);
            $coms = $coms->getCountCom($tableComs, $new->id);
            $coms;
            $new;
            require self::NEWS_PATH;
        }
    }
    public function newsPost(){

        $table = $this->selectTable($this->path);
        $tableComs = $this->selectTableComments($this->path);

        $news = $this->app->getManager('news');
        $new = $news->getTheNews($table, $this->id);
        $new;
        $coms = $this->app->getController('comments', 'home', null);
        $comCount = $coms->getCountCom($tableComs, $this->id);
        $comCount;
        $coms = $this->app->getManager('comments');
        $coms = $coms->getComments($tableComs, $this->id);

        $coms;
        require self::NEW_PATH;
    }
}
