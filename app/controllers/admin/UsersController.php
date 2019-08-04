<?php
namespace controllers\admin;


class UsersController extends \framework\Controller
{
    public function usersManager(){
        $users = $this->app->getManager('users');
        $users = $users->getUsers();

        $usersCount = $this->app->getManager('users');
        $usersCount = $usersCount->countFromUsers();
        foreach($usersCount as $userCount){
            $userCount;
        }
        require 'app/view/admin/Users/tabsListUsers.php';
    }
}