<?php
include_once '../controller/userControlles.php';
if (isset($_POST['submitbtn'])) {
    
    $emriU = $_POST['emri'];
    $emailU= $_POST['email'];
    $paswordU = $_POST["paswordi"];
    $paswordU2 = $_POST["paswordi2"];
    $roli = 2;

 
   
    $view = new InsertView();
    $view->InsertUserForm($emriU, $emailU, $paswordU,$paswordU2,$roli);

    
    
}
if (isset($_POST['forgot'])) {

    header("Location:../logIn.php");   
    exit();
}

class InsertView
{
    public function InsertUserForm($emriU, $emailU, $paswordU, $paswordU2 , $roli)
    {
        if(!isset($emriU) || trim($emriU) == '' || !isset($emailU) || trim($emailU) == '' || !isset($paswordU) || trim($paswordU) == '' ){

           // echo "You did not fill out the required fields.";
            header("Location:../logIn.php");
         }else if ($paswordU != $paswordU2){
            header("Location:../logIn.php"); 
            exit();


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $response = $controller->InsertUser($emriU, $emailU, $paswordU, $paswordU2 , $roli);

        if ($response) {
            ?>
                        <h1>U regjistrua me sukses</h1>
                      
                    <?php
                    header("Location:../homepage.php"); 
                    exit();
                    } else {
                    ?>
                   
                        <h1>Nuk u regjistrua me sukses</h1>
        
          <?php
          header("Location:../logIn.php"); 
          exit();
          echo "Nuk u regjistrua me sukses";
                    }
    }
}
}
?>