<?php
include_once '../controller/userControlles.php';
if (isset($_POST['logINB'])) {
    
    $username = $_POST['username'];
    $email = "veq prov";
    $paswordU = $_POST["passwordddd"];

 
   
    $view = new LogInView();
    $view->LogInUserForm($username ,$email, $paswordU);

    
    
}
class LogInView
{
    public function LogInUserForm($username, $email ,$paswordU)
    {
        if(!isset($username) || trim($username) == ''  || !isset($paswordU) || trim($paswordU) == '' ){

            echo "You did not fill out the required fields.";
         }else{
            
          
        
             
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $response = $controller->GetUser($username,$email, $paswordU);

        if ($response == false) {
            ?>
                        <h1>You dont have an account</h1>
                    <?php
            
                    } else {
                    ?>
                        <h1>Welcome to pocket market</h1>
                        
        
          <?php
          header("Location:..//homepage.php"); 
          exit();
                    }
    }
}
}






?>