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
    public function selectTable($type){
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
    public function updateBillet($id, $table, $title, $post, $statue, $date){
        $updateBillet = $this->app->getManager('news');
        $updateBillet = $updateBillet->updateBillet($id, $table, $title, $post, $statue, $date);

        if($updateBillet){
            return true;
        } else {
            $error = 'Une erreur c\'est prodduite. Votre billet n\'a pas pu être modifier';
        }
    }
    public function addBillet($table, $title, $post, $statue){
        $addBillet = $this->app->getManager('news');
        $addBillet = $addBillet->addBillet($table, $title, $post, $statue);

        if($addBillet){
            return true;
        } else {
            $error = 'Une erreur c\'est prodduite. Votre billet n\'a pas pu être enregistrer';
        }

    }

}