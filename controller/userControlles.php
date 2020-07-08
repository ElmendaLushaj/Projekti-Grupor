<?php
include_once '../models/userMapper.php';
include_once '../models/userModel.php';
class UserController
{
    public function InsertUser($emriU, $emailU, $passwordU)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $user = new User($emriU, $emailU, $passwordU);
        $userMapper2 = new UserMapper($user);
        $userMapper2->Insert();
        return true;



    }

    public function GetUser()
    {
        
      
    }
}
