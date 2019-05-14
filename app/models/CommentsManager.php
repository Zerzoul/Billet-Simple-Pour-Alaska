<?php
namespace models;
use \framework\Manager;

class CommentsManager extends Manager{

    public function comments(){
        $getComs = $this->pdo->query('SELECT id, news_id, author, comments, date FROM newscomments');
        $dataComs = $getComs->fetchAll(\PDO::FETCH_OBJ);
        return $dataComs;
    }
}

