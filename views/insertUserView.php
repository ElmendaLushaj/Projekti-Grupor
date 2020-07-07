<?php
include_once '../controller/userControlles.php';
if (isset($_POST['submitbtn'])) {
    
    $emriU = $_POST['emri'];
    $emailU= $_POST['email'];
    $paswordU = $_POST["paswordi"];

    if(!isset($emriU) || trim($emriU) == '' || !isset($emailU) || trim($emailU) == '' || !isset($paswordU) || trim($paswordU) == '' ){

       
    

   echo "You did not fill out the required fields.";
}else{
   
    $view = new InsertView();
    $view->InsertUserForm($emriU, $emailU, $paswordU);
}
    
    
}

class InsertView
{
    public function InsertUserForm($emriU, $emailU, $paswordU)
    {
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $response = $controller->InsertUser($emriU, $emailU, $paswordU);

        if ($response) {
            ?>
                        <h1>U regjistrua me sukses</h1>
                    <?php
            
                    } else {
                    ?>
                        <h1>Nuk u regjistrua me sukses</h1>
            <?php
    }
}
}
?>