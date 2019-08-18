<?php


namespace controllers\admin;
require_once 'BilletController.php';

class CommentsController extends BilletController {

    public function listComments(){
        $type = $this->type;
        $id = $this->id;
        $path = $this->path;

        if(is_null($type)){
            $type = 'news';
        }
        $typeSelected = $type;

        if(!is_null($type)){
            $tableCom = $this->selectTableComments($type);
            $tablePost = $this->selectTable($type);
            $listCom = $this->displayAllComments($tableCom, $tablePost);

            if(!is_null($id)){
                $checkCom = 'checkcom-'.$type.'-'.$id.'-'.$_GET['idCom'];
                isset($_GET['idCom']) ? $id = $_GET['idCom'] : $id;
                $actionCom = $this->displayComment($tableCom, $tablePost, $id);
            }
        }

        $isTypeNull = $this->isTypeNull;
        $isIdNull = $this->isIdNull;

        require 'app/view/admin/Comments/comments.php';
    }
    public function statueReport($listCom){
        $reported = $listCom->reported;
        $statue = $listCom->statue;
        $badgeColorDefine = $this->reportDefine($statue, $reported);

        $reported === '1' ? $reportTxt = "Signalé" : $reportTxt = $this->getTheStatue($listCom->statue);

        return '<div class="badge badge-pill '.$badgeColorDefine.'">'.$reportTxt.'</div>';
    }
    public function reportDefine($statue, $reported){
        $Badgepublier = 'badge-success';
        $Badgereported = 'badge-warning';
        $BadgenewCom = 'badge-primary';
        $Badgeignored = 'badge-danger';
        $finalClass = null;
        switch($statue){
            case 4:
                $finalClass =  $Badgepublier;
                break;
            case 5:
                $finalClass = $Badgeignored;
                break;
            case 6:
                $finalClass = $BadgenewCom;
                break;
        }

        return $reported === '1' ? $finalClass = $Badgereported : $finalClass;
    }
    public function checkCom(){
        $action = $_POST['actionOnCom'];
        // nouveau et signalé remis à 0
        $actionOnCom = null;
        if(isset($action)){
            $action === 'valider' ? $actionOnCom = 4 : $actionOnCom = 5 ;
        }
        $tableCom = $this->selectTableComments($this->type);
        $updateStatueCom = $this->updateStatueComment($tableCom, $this->id, $actionOnCom);

        if(!$updateStatueCom){
            throw new \Exception('invalid statue action');
        }
        header ('Location: comments-'.$this->type);
        exit();
    }

}