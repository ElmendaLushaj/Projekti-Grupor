
<?php


include_once '../controller/productControllers.php';
if (isset($_POST['submitbtn'])) {
    
    $ProductName= $_POST['ProductName'];
    $ProductCode= $_POST['ProductCode'];
    $Producer = $_POST["Producer"];
    $Category = $_POST["Category"];
    $ProductPicPath=$_FILES['ProductPicPath']['name'];
    $filetmpname = $_FILES['ProductPicPath']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/.$ProductPicPath';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($ProductPicPath,$folder);


 
   
    $view = new InsertView();
    $view->InsertProductForm($ProductName, $ProductCode, $Producer,$Category,$ProductPicPath);

    
    
}
    $view2 = new InsertView();
    $view2->FillTableRowsWithStudents();






class InsertView
{
    public function InsertProductForm($ProductName, $ProductCode, $Producer,$Category,$ProductPicPath)
    {
        if(!isset($ProductName) || trim($ProductName) == '' || !isset($ProductCode) || trim($ProductCode) == '' || !isset($Producer) || trim($Producer) == ''|| !isset($Category) || trim($Category) == ''|| !isset($ProductPicPath) || trim($ProductPicPath) == ''){

            echo "You did not fill out the required fields.";
          
         


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new ProductController();
        $response = $controller->InsertProduct($ProductName, $ProductCode, $Producer,$Category,$ProductPicPath);

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

public function FillTableRowsWithStudents()
    {
        // dergojme kerkesen ne controller
        $controller = new ProductController();
        $data = $controller->GetProduct();

        return $data;
}
}
?>