<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/aboutUsMapper.php';
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/aboutUsModel.php';
class AboutUsController
{
    public function InsertKoment($comment)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
       // $product = new product($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath);
        $aboutusMapper2 = new AboutUsMapper();
        $aboutusMapper2->Insert($comment);
        return true;



    }
    public function get_Products(){
       $aboutUsMapper4 = new AboutUsMapper();
       $produktet = $aboutUsMapper4->getKomentet();
       return $produktet;
      


    }
   
      
      
      
      
      
      
      
      
      
   

    public function GetProduct()
    {
       
        
        
      $productMapper2 = new ProductMapper();
        $res = $productMapper2->getProducts();
        return  $res;
      

     
  
 
       
      
      
    
    }

   
}
?>