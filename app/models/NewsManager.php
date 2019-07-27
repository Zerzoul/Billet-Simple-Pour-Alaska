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

    public function getListBillet($table){
        $getBillets = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif FROM '.$table.' WHERE isTrashed=:isTrashed ');
        $getBillets->execute(array('isTrashed' => '0'));
        $getBillets = $getBillets->fetchAll(\PDO::FETCH_OBJ);
        return $getBillets;
    }

    public function getTheBillet($table, $id){
        $getNews = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif, statue, isTrashed FROM '.$table.' WHERE id=:id ');
        $getNews->execute(array('id' => $id));
        $dataNews = $getNews->fetch(\PDO::FETCH_LAZY);
        return $dataNews;
    }
    public function addBillet($table, $title, $post, $statue){
        $prepareAdding = $this->pdo->prepare('INSERT INTO '.$table.'(title, post, statue) VALUES (:title, :post, :statue)');
        $addBillet = $prepareAdding->execute(array(
            'title' => $title,
            'post' => $post,
            'statue' => $statue,
        ));
        return $addBillet;
    }
    public function trashThisBillet($table, $id){
        $trashThisBillet = $this->pdo->prepare('UPDATE '.$table.' SET isTrashed = :isTrashed WHERE id = :id');
        $trashThisBillet = $trashThisBillet->execute(array(
            'isTrashed' => '1',
            'id' => $id
        ));
        return $trashThisBillet;
    }

    public function deleteThisBillet($table, $id){
        $deleteThisBillet = $this->pdo->prepare('DELETE FROM '.$table.' WHERE id=:id ');
        $deleteThisBillet = $deleteThisBillet->execute(array('id' => $id));
        return $deleteThisBillet;
    }
}
