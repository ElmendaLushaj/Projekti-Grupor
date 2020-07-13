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

    public function __construct($product)
    {
       $this->product = $product;
       $this->connection = $this->getConnection();
        
    }

    public function Insert()
    {

        $sql = "INSERT INTO [Product] (ProductName,ProductCode,Producer,Category,ProductPicPath) VALUES (:ProductName,:ProductCode,:Producer,:Category,:ProductPicPath)";
       
        $ProductName= $this->product->getProductName();
        $ProductCode = $this->product->getProductCode();
        $Producer = $this->product->getProducer();
        $Category = $this->product->getCategory();
        $ProductPicPath = $this->product->getProductPicPath();
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":ProductName", $ProductName);
        $statement->bindParam(":ProductCode",$ProductCode);
        $statement->bindParam(":Producer", $Producer);
        $statement->bindParam(":Category",$Category);
        $statement->bindParam(":ProductPicPath", $ProductPicPath);
        $statement->execute();
       /* $statement->execute(array(
            ':firstname'   => $emriU,
            ':email'   => $emailU,
            ':passworddd' => $paswordU,
            
              ));*/
    }


    public function Update()
    {
        /*$sql2 = 'SELECT  COUNT(*) AS "num_user"  FROM  [User]  WHERE FirstName = :username AND Passworddd =:passworddd';
        
        $emriU = $this->user->getFirstName();
        
        $paswordU = $this->user->getPassworddd();

        $statement = $this->connection->prepare($sql2);
        $statement->bindValue(":username", $emriU);
      
        $statement->bindValue(":passworddd", $paswordU);
       
        try {
            if ($statement->execute()) {
              $row = $statement->fetchAll();
           }         
           // There should be only 1 row;
           if ( $row[0]["num_user"] != 1) {
             return false;
           } else {
             
             return true; 
           }
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        
    }*/
}   



 
public function getProducts(){
  
  $product = $this->connection->prepare("SELECT * FROM Product" );
   $product->execute();

   
  $projekt = $product->fetchAll();
  DBConnection::disconnect();
  return $projekt;
  



  /*foreach($projekt as $row){
   // echo $row["ProductID"]."<br/>"."Product Name: ".$row["ProductName"]."<br/>"."Product Code: ".$row["ProductCode"]."<br/>"."Producer: ".$row["Producer"]."<br/>"."Category: ".$row["Category"]."<br/>"."ProducetPicPath: ".$row["ProductPicPath"]."<br/>";
   $_SESSION['pID']=$row["ProductID"];
    $_SESSION['pN']=$row["ProductName"];
    $_SESSION['pC']=$row["ProductCode"];
    $_SESSION['pP']=$row["Producer"];
    $_SESSION['pCC'] =$row["Category"];
    $_SESSION['pPP']=$row["ProductPicPath"];
  }
}
foreach($result as  $row)
  { $_SESSION['pID']=$row["ProductID"];
    $_SESSION['pN']=$row["ProductName"];
    $_SESSION['pC']=$row["ProductCode"];
    $_SESSION['pP']=$row["Producer"];
    $_SESSION['pCC'] =$row["Category"];
    $_SESSION['pPP']=$row["ProductPicPath"];
    }
    
    */
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

