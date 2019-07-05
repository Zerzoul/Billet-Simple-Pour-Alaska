<?php


namespace controllers\admin;


class billetController extends \framework\Controller
{


    public function displayAllBillet(){
        $news = $this->app->getManager('news');
        $listBillet = $news->getListbillet();

        require 'app/view/admin/Billets/billets.php';
    }
}