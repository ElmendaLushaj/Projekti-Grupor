<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/DbConnection.php');
//include_once 'sliderMarketModel.php';
class SliderMarketMapper extends DBConnection
{
    
    private $connection;

    public function __construct()
    {
      
       $this->connection = $this->getConnection();
        
    }
    public function getMarkets(){
  
      $product = $this->connection->prepare("SELECT * FROM SliderMarket" );
       $product->execute();
    
       
      $projekt = $product->fetchAll();
      //DBConnection::disconnect();
      return $projekt;
    }
   

        
       
        
    


   
        }

?>
