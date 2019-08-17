<?php
namespace controllers\admin;

class BilletController extends \framework\Controller{

    protected $isIdNull = true;
    protected $isTypeNull = true;
    protected $type;
    protected $id;

    const LIST_BILLET_PATH = 'app/view/admin/Billets/billets.php';

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

    public function displayAllBillet($table, $isTrashed){
        $this->isTypeNull = false;
        $news = $this->app->getManager('news');
        return $news->getListBillet($table, $isTrashed);

    }
    public function displayAllComments($table){
        $this->isTypeNull = false;
        $news = $this->app->getManager('comments');
        return $news->getAllComments($table);
    }
    public function getTheBillet($table, $id, $isTrashed){
        $news = $this->app->getManager('news');
        $this->isIdNull = false;
        return $news->getTheBillet($table, $id, $isTrashed);
    }
    public function updateBillet($id, $table, $title, $post, $statue, $date){
        $updateBillet = $this->app->getManager('news');
        $updateBillet = $updateBillet->updateBillet($id, $table, $title, $post, $statue, $date);

        if($updateBillet){
            return true;
        } else {
            return $error = 'Une erreur c\'est prodduite. Votre billet n\'a pas pu être modifier';
        }
    }
    public function addBillet($table, $title, $post, $statue){
        $addBillet = $this->app->getManager('news');
        $addBillet = $addBillet->addBillet($table, $title, $post, $statue);

        if($addBillet){
            return true;
        } else {
            return $error = 'Une erreur c\'est prodduite. Votre billet n\'a pas pu être enregistrer';
        }
    }

    public function selectTheType(){
        if($_POST['type'] === 'Type'){
            header('Location:'.$this->path);
        }
        elseif($_POST['type'] !== $this->type){
            $this->type = $_POST['type'];
        }
        var_dump($this->path);
        header('Location: '.$this->path.'-'.$this->type);
    }

}