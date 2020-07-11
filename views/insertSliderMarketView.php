<?php
include_once '../controller/sliderMarketControllers.php';
if (isset($_POST['submitbtn'])) {
    
    $SliderMarketPicPath=$_FILES['SliderMarketPicPath']['name'];
    $filetmpname = $_FILES['SliderMarketPicPath']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/.$SliderMarketPicPath';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($SliderMarketPicPath,$folder);


 
   
    $view = new InsertView();
    $view->InsertSliderMarketForm($SliderMarketPicPath);

    
    
}

class InsertView
{
    public function InsertSliderMarketForm($SliderMarketPicPath)
    {
        if(!isset($SliderMarketPicPath) || trim($SliderMarketPicPath) == ''){

            echo "You did not fill out the required fields.";
          
         


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new SliderMarketController();
        $response = $controller->InsertSliderMarket($SliderMarketPicPath);

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