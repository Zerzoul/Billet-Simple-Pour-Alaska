<?php
namespace controllers\home;

class NewsController extends \framework\Controller {



    public function listNewsPost(){

        $news = $this->app->getManager('news');
        $news = $news->getListNews();

        foreach($news as $new){

            $coms = $this->app->getController('comments', 'home');
            $coms = $coms->getCountCom($new->id);
            foreach($coms as $com){
                $com;
            }
            $new;
            require 'app/view/home/News/news.php';
        }

    }
    public function newsPost($id){
        $news = $this->app->getManager('news');
        $new = $news->getTheNews($id);

        $coms = $this->app->getController('comments', 'home');
        $com = $coms->getCountCom($id);

        $com;
        $new;
        require 'app/view/home/News/new.php';
    }

}
