<?php
include_once '../models/userMapper.php';
include_once '../models/userModel.php';
class UserController
{
    public function InsertUser($emri, $email, $password)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $user = new User($emri, $email, $password);
        $userMapper = new UserMapper($user);
        $userMapper->Insert($emri, $email, $password);



    }

    /*public function GetStudents()
    {
        //return array;
    }*/
}
