<?php
include_once 'DbConnection.php';
include_once 'userModel.php';
class UserMapper extends DBConnection
{
    private  $user;
    private $connection;

    public function __construct($user)
    {
       $this->user = $user;
       $this->connection = $this->getConnection();
        
    }

    public function Insert()
    {

        $sql = "INSERT INTO [User] (Firstname,Email,Passworddd) VALUES (:firstname,:email,:passworddd)";
       
        $emriU = $this->user->getFirstName();
        $emailU = $this->user->getEmail();
        $paswordU = $this->user->getPassworddd();

        $statement = $this->connection->prepare($sql);
       /* $statement->bindParam(":firstname", $emriU);
        $statement->bindParam(":email",$emailU);
        $statement->bindParam(":passworddd", $paswordU);*/
        $statement->execute(array(
            ':firstname'   => $emriU,
            ':email'   => $emailU,
            ':passworddd' => $paswordU,
            
              ));
    }


    public function logIn(){

     $slql = "SELECT  COUNT(*)  FROM [User] WHERE Firstname = :username AND Passworddd =:password ;"
         
        $emriU = $this->user->getFirstName();
        $paswordU = $this->user->getPassworddd();

 



    }



   /* public function Update()
    {
        // duhet te ndryshohet query dhe atributet qe pranohen
        $sql = "INSERT INTO Studenti (Firstname,lastname,phone) VALUES (:firstname,:lastname,:phone)";
        $statement = $this->connection->prepare($sql);

        $emri = $this->studenti->getFirstName();
        $mbiemri = $this->studenti->getLastName();
        $phone = $this->studenti->getPhone();

        $statement->bindParam(":firstname", $emri);
        $statement->bindParam(":lastname", $mbiemri);
        $statement->bindParam(":phone", $phone);

        $statement->execute();
    }*/

}

?>
