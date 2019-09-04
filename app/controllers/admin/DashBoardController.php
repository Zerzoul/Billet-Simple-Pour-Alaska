<?php

namespace controllers\admin;
use framework\Controller;

class DashBoardController extends Controller
{
    protected $countnewCom;
    protected $countBillet;

    public function dashboard(){
        $billet = $this->app->getManager('news');
        $billetRough = $billet->getCountBillet('0', 3);
        $billetToValidate = $billet->getCountBillet('0', 2);
        $billetPublished = $billet->getCountBillet('0', 1);

        require 'app/view/admin/Dashboard/dashboard.php';
    }
}