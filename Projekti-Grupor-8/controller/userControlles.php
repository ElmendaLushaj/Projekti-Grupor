<?php
include_once '../models/userMapper.php';
include_once '../models/userModel.php';
class UserController
{
    public function InsertUser($username,$email, $passwordU, $roli)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $user = new User($username,$email, $passwordU, $roli);
        $userMapper2 = new UserMapper();
        $userMapper2->Insert($user);
        return true;



    }

    public function GetUser($username,$email, $passwordU , $roli)
    {
      $user = new User($username,$email, $passwordU, $roli);
        $userMapper3= new UserMapper();
        $userMapper3->LogIn($user);
        $res = $userMapper3->LogIn($user);
        if($res){
            return true;
        }else{
            return false;
        }
        
      
    }
}
