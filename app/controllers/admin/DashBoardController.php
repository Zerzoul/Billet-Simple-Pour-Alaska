<?php

namespace controllers\admin;
use framework\Controller;

class DashBoardController extends Controller
{
    protected $countnewCom;
    protected $countBillet;

    public function dashboard(){

        require 'app/view/admin/Dashboard/dashboard.php';
    }
}