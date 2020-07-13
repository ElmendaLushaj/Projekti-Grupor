<?php
session_start();
?>
<?php
include_once 'DbConnection.php';
include_once 'aboutUsModel.php';

class AboutUsMapper extends DBConnection
{
    private  $comment;
    private $connection;

    public function __construct()
    {
       
       $this->connection = $this->getConnection();
        
    }

    public function Insert($AboutUs)
    {
        $this->AboutUs = $AboutUs;
        $sql = "INSERT INTO [AboutUs] (Comment) VALUES (:komenti)";
       
        
        $Koment = $this->AboutUs->getComment();
       
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":komenti", $Koment);
       
        $statement->execute();
       /* $statement->execute(array(
            ':firstname'   => $emriU,
            ':email'   => $emailU,
            ':passworddd' => $paswordU,
            
              ));*/
    }


    




 
public function getKomentet(){
  
  $product = $this->connection->prepare("SELECT * FROM AboutUs" );
   $product->execute();

   
  $projekt = $product->fetchAll();
  //DBConnection::disconnect();
  return $projekt;
  

}



}


?>

