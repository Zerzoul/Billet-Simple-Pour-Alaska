<?php

namespace controllers\admin;
use framework\Controller;

class DashBoardController extends Controller
{
    public function dashboard(){
        $hello = 'hello';
        require 'app/view/admin/Dashboard/dashboard.php';
    }
}