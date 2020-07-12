<?php
include_once '../controller/userControlles.php';
if (isset($_POST['logINB'])) {
    
    $username = $_POST['username'];
    $email = $_POST['username'];;
    $paswordU = $_POST["passwordddd"];
    $roliId = $_POST["type"];

 
   
    $view = new LogInView();
    $view->LogInUserForm($username ,$email, $paswordU,$roliId);

    
    
}


if (isset($_POST['pass'])) {
    header("Location:../logIn.php"); 
    exit();
    
        
}



class LogInView
{
    public function LogInUserForm($username, $email ,$paswordU,$roliId)
    {
        if(!isset($username) || trim($username) == ''  || !isset($paswordU) || trim($paswordU) == '' ) {

            //echo "You did not fill out the required fields.";
            header("Location:../logIn.php"); 
            exit();
         }else{
            
          
        
             
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $response = $controller->GetUser($username,$email, $paswordU,$roliId);

        if ($response == false) {
            ?>
                        <h1>You dont have an account</h1>
                    <?php
                     header("Location:../logIn.php"); 
                     exit();
                    
            
                    } else {
                        if($roliId == 1){
                            echo 'You are admin';

                        }else{
                    ?>
                        <h1>Welcome to pocket market</h1>
                        
        
          <?php
          header("Location:../homepage.php"); 
          exit();
                    }
                }
    }
}
}






?>