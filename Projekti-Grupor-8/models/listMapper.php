<?php
include_once 'DbConnection.php';

class ListMapper extends DBConnection
{
    
    private $connection;

    public function __construct()
    {
       $this->connection = $this->getConnection();
        
    }

   

    public function getList(){
  
      $product = $this->connection->prepare("SELECT * FROM List" );
       $product->execute();
    
       
      $projekt = $product->fetchAll();
      //DBConnection::disconnect();
      return $projekt;
    }
   

   
        }

?>
