<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/productMapper.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/productModel.php');
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
   
   
    public function DeleteProduct($ProductID){
       // $product2 = new Product("1","2","3","4","5");
        $productMapper3 = new ProductMapper();
         $productMapper3->Delete();
         return true;
       
    }
    public function EditProduct($idd,$ProductName, $ProductCode, $Producer,$Price,$ProductPicPath){
        $product2 = new Product($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);
        $productMapper3 = new ProductMapper();
         $productMapper3->Edit($idd,$product2);
         return true;
       
    }
}
?>
