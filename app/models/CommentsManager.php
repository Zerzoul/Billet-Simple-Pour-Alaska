<?php
namespace models;
use \framework\Manager;

class CommentsManager extends Manager{

    public function getAllComments(){
        $getComs = $this->pdo->query('SELECT id, news_id, author, comments, statue date FROM newscomments');
        $dataComs = $getComs->fetchAll(\PDO::FETCH_OBJ);
        return $dataComs;
    }

    public function comments($id){
        $getComs = $this->pdo->prepare('SELECT id, news_id, author, comments, date FROM newscomments WHERE news_id = :news_id AND statue = '.parent::COM_VALID.'');
        $getComs->execute(array('news_id' => $id));
        $dataComs = $getComs->fetchAll(\PDO::FETCH_OBJ);
        return $dataComs;
    }
    public function countComs($id){
        $getComs = $this->pdo->prepare('SELECT COUNT(*) AS counts FROM newscomments WHERE news_id = :news_id AND statue = '.parent::COM_VALID.'');
        $getComs->execute(array('news_id' => $id));
        $dataComs = $getComs->fetchAll(\PDO::FETCH_OBJ);
        return $dataComs;
    }
    public function addComs(){
        $addComs = $this->pdo->prepare('INSERT INTO newscomments(news_id, author, comments, statue) VALUES (:news_id, :author, :comments, :statue)');
        $addComs->execute(array(
            'news_id' => 'news_id',
            'author' => 'author',
            'comments' => 'comments',
            'statue' => parent::COM_IGNORE,
        ));
        return $addComs;
    }
    
}

