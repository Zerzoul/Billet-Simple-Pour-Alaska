<?php
namespace models;


class NewsManager extends \framework\Manager{
    //FRONT
    public function getListNews(){
        $getNews = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif FROM newspost WHERE statue=:statue AND isTrashed=:isTrashed ORDER BY id DESC');
        $getNews->execute(array(
            'statue' => parent::PUBLISHED,
            'isTrashed' => 0));
        $dataNews = $getNews->fetchAll(\PDO::FETCH_OBJ);
        return $dataNews;
    }
    public function getTheNews($id){
        $getNews = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif FROM newspost WHERE id=:id AND statue=:statue' );
        $getNews->execute(array(
            'id' => $id,
            'statue' => parent::PUBLISHED));
        $dataNews = $getNews->fetch(\PDO::FETCH_LAZY);
        return $dataNews;
    }
    //ADMIN
    public function getListBillet($table, $isTrashed){
        $getBillets = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif FROM '.$table.' WHERE isTrashed=:isTrashed ');
        $getBillets->execute(array('isTrashed' => $isTrashed,));
        $getBillets = $getBillets->fetchAll(\PDO::FETCH_OBJ);
        return $getBillets;
    }
    public function getTheBilletWithoutTrash($table, $id)
    {
        $getNews = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif, statue, isTrashed FROM ' . $table . ' WHERE id=:id ');
        $getNews->execute(array(
            'id' => $id
        ));
        $dataNews = $getNews->fetch(\PDO::FETCH_LAZY);
        return $dataNews;
    }
    public function getTheBillet($table, $id, $isTrashed){
        $getNews = $this->pdo->prepare('SELECT id, title, post, date_create, date_modif, statue, isTrashed FROM '.$table.' WHERE id=:id AND isTrashed=:isTrashed');
        $getNews->execute(array(
            'id' => $id,
            'isTrashed' => $isTrashed
            ));
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
    public function updateBillet($id, $table, $title, $post, $statue, $date){
        $prepareUpdate = $this->pdo->prepare('UPDATE '.$table.' SET title = :title, post = :post, statue = :statue, date_modif = :date_modif WHERE id = :id');
        $updateBillet = $prepareUpdate ->execute(array(
            'id' => $id,
            'title' => $title,
            'post' => $post,
            'statue' => $statue,
            'date_modif' => $date
        ));
        return $updateBillet;
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
    public function restoreThisBillet($table, $id){
        $trashThisBillet = $this->pdo->prepare('UPDATE '.$table.' SET isTrashed = :isTrashed WHERE id = :id');
        $trashThisBillet = $trashThisBillet->execute(array(
            'isTrashed' => '0',
            'id' => $id
        ));
        return $trashThisBillet;
    }
}
