<?php
include_once '../controller/sliderProductControllers.php';
if (isset($_POST['submitbtn'])) {
    
    $SliderProductPicPath=$_FILES['SliderProductPicPath']['name'];
    $filetmpname = $_FILES['SliderProductPicPath']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/.$SliderProductPicPath';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($SliderProductPicPath,$folder);


 
   
    $view = new InsertView();
    $view->InsertSliderProductForm($SliderProductPicPath);

    
    
}

class InsertView
{
    public function InsertSliderProductForm($SliderProductPicPath)
    {
        if(!isset($SliderProductPicPath) || trim($SliderProductPicPath) == ''){

            echo "You did not fill out the required fields.";
          
         


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new SliderProductController();
        $response = $controller->InsertSliderProduct($SliderProductPicPath);

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