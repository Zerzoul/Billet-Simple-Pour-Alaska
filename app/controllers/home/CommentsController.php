<?php
namespace controller;
echo $_POST['email'].'<br>';
echo $_POST['postComment'].'<br>';
echo 'Id de la news '. $_GET['id'];

class CommentsController{

    public function __construct(){
        echo $_POST['email'];
    }

}