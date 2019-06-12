<?php
namespace models;


class NewsManager extends \framework\Manager{

    public function getListNews(){
        $getNews = $this->pdo->query('SELECT id, title, post, date_create, date_modif FROM newspost WHERE statue ='. parent::PUBLISHED .' ORDER BY id DESC');
        $dataNews = $getNews->fetchAll(\PDO::FETCH_OBJ);
        return $dataNews;
    }

    public function getTheNews($id){
        $getNews = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif FROM newspost WHERE id=:id AND statue ='. parent::PUBLISHED );
        $getNews->execute(array('id' => $id));
        $dataNews = $getNews->fetch(\PDO::FETCH_LAZY);
        return $dataNews;
    }
}
