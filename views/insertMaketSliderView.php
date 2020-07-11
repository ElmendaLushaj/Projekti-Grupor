<?php
include_once '../controller/MarketSliderControllers.php';
if (isset($_POST['submitbtn'])) {
    
   
    $MarketSlidericPath=$_FILES['MarketSliderPicPath']['name'];
    $filetmpname = $_FILES['MarketSliderPicPath']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/.$MarketSliderPicPath';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($MarketSliderPicPath,$folder);


 
   
    $view = new InsertView();
    $view->InsertMarketSliderForm($MarketSliderPicPath);

    
    
}

class InsertView
{
    public function InsertMarketSliderForm($MarketSliderPicPath)
    {
        if(!isset($MarketSliderPicPath) || trim($MarketSliderPicPath) == ''){

            echo "You did not fill out the required fields.";
          
         


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new MarketSliderController();
        $response = $controller->InsertMarketSlider($MarketSliderPicPath);

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