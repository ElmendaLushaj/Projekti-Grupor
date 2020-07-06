<?php
class User
{
    private $UserID;
    private $Name;
    private $Email;
    private $Password;

    public function __construct($Name, $Email, $Password)
    {
        $this->Name = $Name;
        $this->Email = $Email;
        $this->Password = $Password;
    }

    public function getName()
    {
        return $this->Name;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    public function getPassword()
    {
        return $this->Password;
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
