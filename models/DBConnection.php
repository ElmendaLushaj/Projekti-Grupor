<?php

class DBConnection{

private $servername = 'DESKTOP-6VUBVAB';
private $user = 'web';
private $password = '123456789';
private $databaseName = 'WebSQL';

public function getConnection()
{
    // inicojme koneksionin me db
    try {
        $connection = new PDO("sqlsrv:Server=$this->servername;Database=$this->databaseName", $this->user, $this->password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;
    }
    return $connection;
}


}


?>