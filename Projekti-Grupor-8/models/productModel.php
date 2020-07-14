<?php
class Product
{
    private $ProductID;
    private $ProductName;
    private $ProductCode;
    private $Producer;
    private $Price;
    private $ProductPicPath;
    public function __construct($ProductName, $ProductCode, $Producer,$Price,$ProductPicPath)
    {
        $this->ProductName = $ProductName;
        $this->ProductCode = $ProductCode;
        $this->Producer = $Producer;
        $this->Price = $Price;
        $this->ProductPicPath = $ProductPicPath;
    }
    public function getProductID()
    {
        return $this->ProductID;
    }
    public function getProductName()
    {
        return $this->ProductName;
    }
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    public function getProducer()
    {
        return $this->Producer;
    }
    public function getPrice()
    {
        return $this->Price;
    }
    public function getProductPicPath()
    {
        return $this->ProductPicPath;
    }
    public function setProductName($name)
    {
        $this->ProductName = $name;
    }
    public function setProductCode($code)
    {
        $this->ProductCode= $code;
    }
    public function setPrice($name)
    {
        $this->Price = $name;
    }
    public function setProductPicPath($path)
    {
        $this->ProductPicPath= $path;
    }
}
