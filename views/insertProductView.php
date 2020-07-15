
<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/controller/productControllers.php');


if (isset($_POST['submitbtn'])) {
    
    $ProductName= $_POST['ProductName'];
    $ProductCode= $_POST['ProductCode'];
    $Producer = $_POST["Producer"];
    $Price = $_POST["Category"];
   // $ProductPicPath =$_POST["ProductPicPath"];
    $ProductPicPath=$_FILES['ProductPicPath']['name'];
    //$filetmpname = $_FILES['ProductPicPath']['tmp_name'];
    //folder where images will be uploaded
   // $folder = 'imagesuploadedf/.$ProductPicPath';
    //function for saving the uploaded images in a specific folder
   // move_uploaded_file($ProductPicPath,$folder);


 
   
    $view = new InsertView();
    $view->InsertProductForm($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);

    
    

}
if (isset($_POST['submitbtn3'])) {
    
    $ProductID= $_POST['ProductID'];


 
   
    $view = new InsertView();
    $view->DeleteP($ProductID);

    
    

}
if (isset($_POST['submitbtn4'])) {
    $idd= $_POST['ProductID'];
    $ProductName= $_POST['ProductName'];
    $ProductCode= $_POST['ProductCode'];
    $Producer = $_POST["Producer"];
    $Price = $_POST["Category"];
    $ProductPicPath=$_FILES['ProductPicPath']['name'];
    
    //function for saving the uploaded images in a specific folder
   


 
   
    $view = new InsertView();
    $view->editP($idd,$ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);

    
    

}

class InsertView
{
    public function InsertProductForm($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath)
    {
        if(!isset($ProductName) || trim($ProductName) == '' || !isset($ProductCode) || trim($ProductCode) == '' || !isset($Producer) || trim($Producer) == ''|| !isset($Price) || trim($Price) == ''|| !isset($ProductPicPath) || trim($ProductPicPath) == '' ||  !is_numeric($ProductCode) ||  !is_numeric($ProductCode)){

            
          
                    

                    echo '<script type="text/javascript">'; 
                    echo 'alert("You filled the fields incorrectly!");'; 
                    echo 'window.location.href = "../productForm.php";';
                    echo '</script>';
                    
                    
                
                    


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new ProductController();
        $response = $controller->InsertProduct($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);

        if ($response) {
            ?>
                        
                      
                    <?php
                    

                    echo '<script type="text/javascript">'; 
                    echo 'alert("Registered Successfully!");'; 
                    echo 'window.location.href = "../productForm.php";';
                    echo '</script>';
                    
                    
                
                    } else {
                    ?>
                   
                   <?php

echo '<script type="text/javascript">'; 
echo 'alert("Registered Failed!");'; 
echo 'window.location.href = "../productForm.php";';
echo '</script>';


?>
        
          <?php
         // header("Location:../logIn.php"); 
         // exit();
          echo "Register Failed";
                    }
    }
}

public function getP()
    {
        // dergojme kerkesen ne controller
        $controller = new ProductController();
        $data = $controller->get_Products();

        return $data;
}

public function DeleteP($ProductID){
  
    if(!isset($ProductID) || trim($ProductID) == '' || !is_numeric($ProductID)){
        

        echo '<script type="text/javascript">'; 
     
        echo 'window.location.href = "../productForm.php";';
        echo '</script>';
        
        
        
        }
         else{
    $controller = new ProductController();
    
    $response = $controller->DeleteProduct($ProductID);

    if ($response) {
        ?>
                                   <?php

echo '<script type="text/javascript">'; 
echo 'alert("Deleted Successfully!");'; 
echo 'window.location.href = "../productForm.php";';
echo '</script>';


?>
                  
                <?php
               // header("Location:../homepage.php"); 
                //exit();
                } else {
                ?>
               
               <?php

echo '<script type="text/javascript">'; 
echo 'alert("Deleted Failed!");'; 
echo 'window.location.href = "productForm.php";';
echo '</script>';


?>
    
      <?php
   

}}
}

public function editP($idd,$ProductName, $ProductCode, $Producer,$Price,$ProductPicPath){
    if(!isset($ProductName) || trim($ProductName) == '' || !isset($ProductCode) || trim($ProductCode) == '' || !isset($Producer) || trim($Producer) == ''|| !isset($Price) || trim($Price) == ''|| !isset($ProductPicPath) || trim($ProductPicPath) == '' || !is_numeric($idd) || !is_numeric($Price) ||  !is_numeric($ProductCode)){
       
        echo '<script type="text/javascript">'; 
        echo 'alert("You filled the fields incorrectly!");'; 
        echo 'window.location.href = "../productForm.php";';
        echo '</script>';
        }
         else{
    $controller = new ProductController();
    $response = $controller->EditProduct($idd,$ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);
    if ($response) {
        ?>
                           <?php

echo '<script type="text/javascript">'; 
echo 'alert("Edited Successfully!");'; 
echo 'window.location.href = "../productForm.php";';
echo '</script>';


?>
<?php
                  
                
                } else {
                ?>
               
               <?php

echo '<script type="text/javascript">'; 
echo 'alert("Editing Failed!");'; 
echo 'window.location.href = "../productForm.php";';
echo '</script>';


?>
    
      <?php
   


                }

}
}
}
?>