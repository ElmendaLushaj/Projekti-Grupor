<?php
include_once '../models/productMapper.php';
include_once '../models/productModel.php';
class ProductController
{
    public function InsertProduct($ProductName, $ProductCode, $Producer,$Category,$ProductPicPath)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $product = new product($ProductName, $ProductCode, $Producer,$Category,$ProductPicPath);
        $productMapper2 = new ProductMapper($product);
        $productMapper2->Insert();
        return true;



    }

    public function GetProduct()
    {
        
      
    }
}
