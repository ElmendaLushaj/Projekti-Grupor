<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/productMapper.php';
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/productModel.php';
class ProductController
{
    public function InsertProduct($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $product = new product($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);
        $productMapper2 = new ProductMapper();
        $productMapper2->Insert($product);
        return true;



    }
    public function get_Products(){
       $productMapper4 = new ProductMapper();
       $produktet = $productMapper4->getProducts();
       return $produktet;
      


    }
   
      
      
      
      
      
      
      
      
      
   

   /* public function GetProduct()
    {
       
        
        
      $productMapper2 = new ProductMapper("1" , "2" , "3" , "4" , "5");
        $res = $productMapper2->getProducts();
        return  $res;
      

     
  
 
       
      
      
    
    }*/

    public function DeleteProduct($ProductID){
       // $product2 = new Product("1","2","3","4","5");
        $productMapper3 = new ProductMapper();
         $productMapper3->Delete();
         return true;
       
    }
    public function EditProduct(){
        $product2 = new Product("1","2","3","4","5");
        $productMapper3 = new ProductMapper($product2);
         $productMapper3->Edit();
         return true;
       
    }
}
?>