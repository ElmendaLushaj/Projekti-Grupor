<?php
include_once 'DbConnection.php';
include_once 'userModel.php';
class UserMapper extends DBConnection
{
    private  $user;
    private $connection;

    public function __construct()
    {
      
       $this->connection = $this->getConnection();
        
    }

    public function Insert($user)
    {
      $this->user = $user;
        $sql = "INSERT INTO [User] (Firstname,Email,Passworddd , RoleId) VALUES (:firstname,:email,:passworddd,:roli)";
       
        $emriU = $this->user->getFirstName();
        $emailU = $this->user->getEmail();
        $paswordU = $this->user->getPassworddd();
        $roli=2;

        $statement = $this->connection->prepare($sql);
       /* $statement->bindParam(":firstname", $emriU);
        $statement->bindParam(":email",$emailU);
        $statement->bindParam(":passworddd", $paswordU);*/
        $statement->execute(array(
            ':firstname'   => $emriU,
            ':email'   => $emailU,
            ':passworddd' => $paswordU,
            ':roli' =>$roli,
            
              ));
    }


    public function Login($user)
    {
      $this->user = $user;
        $sql2 = ' SELECT  COUNT(*) AS "num_user"  FROM  [User]  WHERE (FirstName = :username or Email = :email) AND Passworddd =:passworddd AND RoleId =:roleId' ;
        
        $emriU = $this->user->getFirstName();
        $emailiU = $this->user->getEmail();
        $paswordU = $this->user->getPassworddd();
        $roli= $this->user->getRoliId();

        $statement = $this->connection->prepare($sql2);
        $statement->bindValue(":username", $emriU);
        $statement->bindValue(":email",$emailiU);
       
        $statement->bindValue(":passworddd", $paswordU);
        $statement->bindValue(":roleId", $roli);
       
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
        }   
    }

        
       
        
    


   
        }

?>
