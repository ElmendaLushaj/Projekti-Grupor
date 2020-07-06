<?php
include_once 'DbConnection.php';
include_once 'userModel.php';
class UserMapper
{
    private $user;
    private $connection;
    public function __construct(\User $user)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->user = $user;
    }

    public function Insert()
    {

        //$sql = "INSERT INTO User (name, email, password) VALUES (:name, :surname, :sex)";
        $stmt= $pdo->prepare($sql);
        
        $sql = "INSERT INTO User (name ,email,password) VALUES (:name,:email,:password)";

        $emri = $this->user->getName();
        $adresa = $this->user->getEmail();
        $fjalkalimi = $this->user->getPassword();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":name", $emri);
        $statement->bindParam(":email", $adresa);
        $statement->bindParam(":password", $fjalkalimi);

        $statement->execute();
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
