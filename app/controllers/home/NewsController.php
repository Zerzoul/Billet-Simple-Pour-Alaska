<?php
namespace controllers\home;

class NewsController extends \framework\Controller {


    public function listNewsPost(){

        $news = $this->app->getManager('news');
        $news = $news->getListNews();

        foreach($news as $new){

            $coms = $this->app->getController('comments', 'home', null);
            $coms = $coms->getCountCom($new->id);

            $coms;
            $new;
            require self::NEWS_PATH;
        }
    }
    public function newsPost(){
        $news = $this->app->getManager('news');
        $new = $news->getTheNews($this->id);
        $new;
        $coms = $this->app->getController('comments', 'home', null);
        $comCount = $coms->getCountCom($this->id);
        $comCount;
        $coms = $this->app->getManager('comments');
        $coms = $coms->getComments($this->id);

        $coms;
        require self::NEW_PATH;
    }
}
