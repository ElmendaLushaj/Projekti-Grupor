<?php
class User
{
    private $UserID;
    private $FirstName;
    private $Email;
    private $Passworddd;

    public function __construct($FirstName, $Email, $Passworddd)
    {
        $this->FirstName = $FirstName;
        $this->Email = $Email;
        $this->Passworddd = $Passworddd;
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
}
