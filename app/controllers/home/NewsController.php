<?php
namespace controllers\home;

class NewsController extends \framework\Controller {


    public function listNewsPost(){

        $news = $this->app->getManager('news');
        $news = $news->getListNews();

        foreach($news as $new){

            $coms = $this->app->getController('comments', 'home');
            $coms = $coms->getCountCom($new->id);

            $coms;
            $new;
            require self::NEWS_PATH;
        }
    }
    public function newsPost($id){
        $news = $this->app->getManager('news');
        $new = $news->getTheNews($id);
        $new;
        $coms = $this->app->getController('comments', 'home');
        $comCount = $coms->getCountCom($id);
        $comCount;
        $coms = $this->app->getManager('comments');
        $coms = $coms->getComments($id);

        $coms;
        require self::NEW_PATH;
    }
}
