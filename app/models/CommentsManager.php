<?php
namespace models;
use \framework\Manager;

class CommentsManager extends Manager{

    public function getAllComments($table){
        $getComs = $this->pdo->query('SELECT id, news_id, author, comments, date FROM '.$table);
        $dataComs = $getComs->fetchAll(\PDO::FETCH_OBJ);
        return $dataComs;
    }

    public function getComments($table, $id){
        $getComs = $this->pdo->prepare('SELECT id, news_id, author, comments, date FROM '.$table.' WHERE news_id = :news_id AND statue = '.parent::COM_VALID);
        $getComs->execute(array('news_id' => $id));
        $dataComs = $getComs->fetchAll(\PDO::FETCH_OBJ);
        return $dataComs;
    }
    public function countComs($table, $id){
        $getComs = $this->pdo->prepare('SELECT COUNT(*) AS counts FROM '.$table.' WHERE news_id = :news_id AND statue = '.parent::COM_VALID);
        $getComs->execute(array('news_id' => $id));
        $dataComs = $getComs->fetch(\PDO::FETCH_LAZY );
        return $dataComs;
    }
    public function addComs($table, $id, $author, $comments){
        $addComs = $this->pdo->prepare('INSERT INTO '.$table.'(news_id, author, comments, statue) VALUES (:news_id, :author, :comments, :statue)');
        $addComs->execute(array(
            'news_id' => $id,
            'author' => $author,
            'comments' => $comments,
            'statue' => parent::COM_VALID,
        ));
        return $addComs;
    }
    public function reportCom($table, $id, $report){
        $reportUpdate = $this->pdo->prepare('UPDATE '.$table.' SET reported = :reported WHERE id = :id');
        $reportUpdate = $reportUpdate->execute(array(
           'reported' => $report,
           'id' => $id
        ));
        return $reportUpdate;
    }
    
}

