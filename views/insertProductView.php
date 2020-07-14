
<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/controller/productControllers.php';


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
        if(!isset($ProductName) || trim($ProductName) == '' || !isset($ProductCode) || trim($ProductCode) == '' || !isset($Producer) || trim($Producer) == ''|| !isset($Price) || trim($Price) == ''|| !isset($ProductPicPath) || trim($ProductPicPath) == ''){

            echo "You did not fill out the required fields.";
          
         


         }else{
             
        // dergojme kerkesen ne controller
        $controller = new ProductController();
        $response = $controller->InsertProduct($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);

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

public function getP()
    {
        // dergojme kerkesen ne controller
        $controller = new ProductController();
        $data = $controller->get_Products();

        return $data;
}

public function DeleteP($ProductID){
  
    $controller = new ProductController();
    
    $response = $controller->DeleteProduct($ProductID);

    if ($response) {
        ?>
                    <h1>Delete succsesfully</h1>
                  
                <?php
               // header("Location:../homepage.php"); 
                //exit();
                } else {
                ?>
               
                    <h1>Delete Failed</h1>
    
      <?php
   

}
}

public function editP($idd,$ProductName, $ProductCode, $Producer,$Price,$ProductPicPath){

    $controller = new ProductController();
    $response = $controller->EditProduct($idd,$ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);
    if ($response) {
        ?>
                    <h1>Editit succsesfully</h1>
                  
                <?php
               // header("Location:../homepage.php"); 
                //exit();
                } else {
                ?>
               
                    <h>Edit Failed</h1>
    
      <?php
   




}
}
}
?>