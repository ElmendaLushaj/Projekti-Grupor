<?php
include_once '../controller/marketControllers.php';
if (isset($_POST['submitbtn'])) {
    
    $ProductName= $_POST['MarketName'];
    $ProductCode= $_POST['Address'];
    $Producer = $_POST["Phone"];
  


 
   
    $view = new InsertView();
    $view->InsertProductForm($MarketName, $Address, $Phone);

    
    
}

class InsertView
{
    public function InsertProductForm($MarketName, $Address, $Phone)
    {
        if(!isset($MarketName) || trim($MarketName) == '' || !isset($Address) || trim($Address) == '' || !isset($Phone) || trim($Phone) == ''){

            echo "You did not fill out the required fields.";
          
         


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new MarketController();
        $response = $controller->InsertMarket($MarketName, $Address, $Phone);

        if ($response) {
            ?>
                        <h1>Registered Successfully</h1>
                      
                    <?php
                   // header("Location:../homepage.php"); 
                    //exit();
                    } else {
                    ?>
                   
                        <h1>Register Failed</h1>
        
          <?php
         // header("Location:../logIb.php"); 
         // exit();
          echo "Register Failed";
                    }
    }
}
}
?>