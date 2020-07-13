<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/DbConnection.php';

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
