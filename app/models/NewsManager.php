<?php
namespace models;
use \framework\Manager;

class NewsManager extends Manager{

    public function getListNews(){
        $getNews = $this->pdo->query('SELECT id, title, post, date_create, date_modif FROM newspost');
        $dataNews = $getNews->fetchAll(\PDO::FETCH_OBJ);
        return $dataNews;
    }

    public function getNews($id){
        $getNews = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif FROM newspost WHERE id = :id');
        $getNews->execute(array(':id' => $id));
        $dataNews = $getNews->fetchAll(\PDO::FETCH_OBJ);
        return $dataNews;
    }
}