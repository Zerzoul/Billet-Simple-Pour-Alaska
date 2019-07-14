<?php


namespace controllers\admin;


class billetController extends \framework\Controller
{
    private $_isIdNull = false;

    public function billetManager($id = null){
        if(!isset($_SESSION['admin'])) {
            header("Location: login");
            exit();
        }
        var_dump($_POST['type']);
        $listBillet = $this->displayAllBillet();
        if(!is_null($id)){
            $this->_isIdNull = true;
            $actionBillet = $this->checkBillet($id);

            $statue = $this->getTheStatue($actionBillet->statue);
        }

        $isIdNull = $this->_isIdNull;
        require 'app/view/admin/Billets/billets.php';
    }
    public function displayAllBillet(){
        $news = $this->app->getManager('news');
        return $news->getListbillet();

    }
    public function checkBillet($id){
        $news = $this->app->getManager('news');
        return $news->getTheBillet($id);
    }
    public function getTheStatue($statue){
        switch($statue){
            case 1:
                return 'Publier';
                break;
            case 2:
                return 'A valider';
                break;
            case 3:
                return 'Brouillon';
                break;
        }
    }
}