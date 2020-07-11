<?php
class Market
{
    private $MarketID;
    private $ProductName;
    private $Address;
    private $Phone;
    
    public function __construct($MarketName, $Address, $Phone)
    {
        $this->MarketName = $MarketName;
        $this->Address = $Address;
        $this->Phone = $Phone;
      
    }

    public function getMarketName()
    {
        return $this->MarketName;
    }
    public function getPhone()
    {
        return $this->Phone;
    }
    public function getAddress()
    {
        return $this->Address;
    }
    
    public function setMarketName($name)
    {
        $this->MarketName = $name;
    }
    public function setPhone($code)
    {
        $this->Phone= $code;
    }
    public function setAddress($name)
    {
        $this->Address= $name;
    }
   
}
