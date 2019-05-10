<?php
namespace models;
use \framework\PDOManager;

class NewsManager extends PDOManager{

    protected $dbConnect;

    public function __construct(){
        $this->dbConnect = parent::MYSQLConnect();
    }
    public function getNewsPost(){
        $getNews = $this->dbConnect->query('SELECT id, title, post, date_create, date_modif FROM newspost');
        $dataNews = $getNews->fetchAll(\PDO::FETCH_OBJ);
        var_dump($dataNews);
    }
}