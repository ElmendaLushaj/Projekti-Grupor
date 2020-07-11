<?php
include_once '../controller/productSliderControllers.php';
if (isset($_POST['submitbtn'])) {
    
   
    $ProductSliderPicPath=$_FILES['ProductSliderPicPath']['name'];
    $filetmpname = $_FILES['ProductSliderPicPath']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/.$ProductSliderPicPath';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($ProductSliderPicPath,$folder);


 
   
    $view = new InsertView();
    $view->InsertProductSliderForm($ProductSliderPicPath);

    
    
}

class InsertView
{
    public function InsertProductSliderForm($ProductSliderPicPath)
    {
        if(!isset($ProductSliderPicPath) || trim($ProductSliderPicPath) == ''){

            echo "You did not fill out the required fields.";
          
         


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new ProductSliderController();
        $response = $controller->InsertProductSlider($ProductSliderPicPath);

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