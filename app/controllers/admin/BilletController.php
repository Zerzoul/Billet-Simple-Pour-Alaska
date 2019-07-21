<?php
namespace controllers\admin;

class BilletController extends \framework\Controller{

    protected $isIdNull = false;
    protected $isTypeNull = true;
    protected $type;
    protected $id;



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
            default:
                return null;
        }
    }
}