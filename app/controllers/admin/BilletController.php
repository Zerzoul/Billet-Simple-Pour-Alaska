<?php
namespace controllers\admin;

class BilletController extends \framework\Controller{

    protected $isIdNull = true;
    protected $isTypeNull = true;
    protected $type;
    protected $id;

    protected function getTheStatue($statue){
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
            default:
                return null;
        }
    }
    protected function selectTable($type){
        return $type.'post';
    }

    public function displayAllBillet($table){
        $this->isTypeNull = false;
        $news = $this->app->getManager('news');
        return $news->getListBillet($table);

    }
    public function getTheBillet($table, $id){
        $news = $this->app->getManager('news');
        $this->isIdNull = false;
        return $news->getTheBillet($table, $id);
    }

}