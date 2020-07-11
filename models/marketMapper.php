<?php
include_once 'DbConnection.php';
include_once 'marketModel.php';
class MarketMapper extends DBConnection
{
    private  $market;
    private $connection;

    public function __construct($market)
    {
       $this->market = $market;
       $this->connection = $this->getConnection();
        
    }

    public function Insert()
    {

        $sql = "INSERT INTO [Market] (MarketName,Address,Phone) VALUES (:MarketName,:Address,:Phone)";
       
        $MarketName= $this->market->getMarketName();
        $Address = $this->market->getAddress();
        $Phone = $this->market->getPhone();
     
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":MarketName", $MarketName);
        $statement->bindParam(":Address",$Address);
        $statement->bindParam(":Phone", $Phone);
    
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
        
       
        
    


   
        }

?>
