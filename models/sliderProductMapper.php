<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/DbConnection.php');

class SliderProductMapper extends DBConnection
{
    
    private $connection;

    public function __construct()
    {
     
       $this->connection = $this->getConnection();
        
    }

    public function getProducts(){
  
      $product = $this->connection->prepare("SELECT * FROM SliderProduct" );
       $product->execute();
    
       
      $projekt = $product->fetchAll();
      //DBConnection::disconnect();
      return $projekt;
    }
  }
?>
