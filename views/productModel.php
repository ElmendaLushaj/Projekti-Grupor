<?php
class Product
{
    private $ProductID;
    private $ProductName;
    private $ProductCode;
    private $Producer;
    private $Category;
    private $ProductPicPath;
    public function __construct($ProductName, $ProductCode, $Producer,$Category,$ProductPicPath)
    {
        $this->ProductName = $ProductName;
        $this->ProductCode = $ProductCode;
        $this->Producer = $Producer;
        $this->Category = $Category;
        $this->ProductPicPath = $ProductPicPath;
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
    public function getCategory()
    {
        return $this->Category;
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
    public function setCategory($name)
    {
        $this->Category = $name;
    }
    public function setProductPicPath($path)
    {
        $this->ProductPicPath= $path;
    }
}
