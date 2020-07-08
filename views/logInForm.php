<?php
include_once '../controller/userControlles.php';
if (isset($_POST['logINB'])) {
    
    $username = $_POST['username'];
   
    $paswordU = $_POST["passwordddd"];

 
   
    $view = new InsertView();
    $view->InsertUserForm($emriU, $emailU, $paswordU);

    
    
}

function Login()
{
    if($username)
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
    
    if(empty($_POST['paswordU']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
    
    $username = trim($_POST['username']);
    $passwordU = trim($_POST['paswordU']);
    
    if(!$this->CheckLoginInDB($username,$passwordU))
    {
        return false;
    }
    
    session_start();
    
    $_SESSION[$this->GetLoginSessionVar()] = $username;
    
    return true;
}


?>