<?php
class User
{
    private $UserID;
    private $FirstName;
    private $Email;
    private $Passworddd;
    private $RoliId;

    public function __construct($FirstName, $Email, $Passworddd , $RoliId)
    {
        $this->FirstName = $FirstName;
        $this->Email = $Email;
        $this->Passworddd = $Passworddd;
        $this->RoliId = $RoliId;
        }

    public function getFirstName()
    {
        return $this->FirstName;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    public function getPassworddd()
    {
        return $this->Passworddd;
    }
    public function setName($name)
    {
        $this->Name = $name;
    }
    public function setEmail($email)
    {
        $this->Email = $email;
    }
    public function getRoliId(){
        return $this->RoliId;
    }
}
