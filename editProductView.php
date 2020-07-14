<?php
if(isset($_POST['editbtn'])){
    if(isset($_GET['ProductID'])){
      
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
        

          $view2=new EditView();
          $view2->EditProductForm($ProductID,$ProductName,$ProductCode,$Category,$Producer,$ProductPicPath);
}}

class EditView{
public function EditProductForm($ProductID,$ProductName,$ProductCode,$Category,$Producer,$ProductPicPath){
  
    $controller = new ProductController();
    
  
  
    
    $response = $controller->EditProduct();


    if ($response) {
        ?>
                    <h1>Edited Successfully</h1>
                  
                <?php
               // header("Location:../homepage.php"); 
                //exit();
                } else {
                ?>
               
                    <h1>Editing Failed</h1>
    
      <?php
     // header("Location:../logIb.php"); 
     // exit();
      echo "Editing Failed";
                }
}

}

    