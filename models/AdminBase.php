<?php

abstract class AdminBase{

    public static function checkAdmin()
    {
        $userId = User::checkLogin();
        $user = User::userData($userId);

        if($user['role'] == 'admin'){
            return true;
        }
      //  die('Access denied');

    }
 
}