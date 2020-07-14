<?php
session_start();
?>
<?php
include_once 'DbConnection.php';
include_once 'productModel.php';

class ProductMapper extends DBConnection
{
    private  $product;
    private $connection;

    public function __construct()
    {
       
       $this->connection = $this->getConnection();
        
    }

    public function Insert($product)
    {
        $this->product = $product;
        $sql = "INSERT INTO [Product] (ProductName,ProductCode,Producer,Price,ProductPicPath) VALUES (:ProductName,:ProductCode,:Producer,:price,:ProductPicPath)";
       
        $ProductName= $this->product->getProductName();
        $ProductCode = $this->product->getProductCode();
        $Producer = $this->product->getProducer();
        $Price = $this->product->getPrice();
        $ProductPicPath = $this->product->getProductPicPath();
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":ProductName", $ProductName);
        $statement->bindParam(":ProductCode",$ProductCode);
        $statement->bindParam(":Producer", $Producer);
        $statement->bindParam(":price",$Price);
        $statement->bindParam(":ProductPicPath", $ProductPicPath);
        $statement->execute();
       /* $statement->execute(array(
            ':firstname'   => $emriU,
            ':email'   => $emailU,
            ':passworddd' => $paswordU,
            
              ));*/
    }


    public function Edit($idd,$product)
    {
      $this->product = $product;
      $sql = "UPDATE Product SET ProductName=:productName, ProductCode=:productCode, Producer=:producer,Price=:price, ProductPicPath=:productPicPath WHERE ProductID=$idd";
     // $statement = $this->connection->prepare($sql);
       
      

      $ProductName= $this->product->getProductName();
      $ProductCode = $this->product->getProductCode();
      $Producer = $this->product->getProducer();
      $Price = $this->product->getPrice();
      $ProductPicPath = $this->product->getProductPicPath();
      $statement = $this->connection->prepare($sql);
      
      $statement->bindParam(":productName", $ProductName);
      $statement->bindParam(":productCode",$ProductCode);
      $statement->bindParam(":producer", $Producer);
      $statement->bindParam(":price",$Price);
      $statement->bindParam(":productPicPath", $ProductPicPath);
      $statement->execute();
   
    
}   



 
public function getProducts(){
  
  $product = $this->connection->prepare("SELECT * FROM Product" );
   $product->execute();

   
  $projekt = $product->fetchAll();
  //DBConnection::disconnect();
  return $projekt;
  
}

public function Delete(){

 
  $sql3 = "DELETE FROM Product WHERE ProductId =:idd";
  $PID= $_POST["ProductID"];

  $statement1 = $this->connection->prepare($sql3);
  $statement1->bindParam(":idd", $PID);
  $statement1->execute();
 
}


}


?>

