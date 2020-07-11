<?php
class ProductSlider
{
    private $ProductSliderID;
    private $ProductSliderPicPath;
    public function __construct($ProductSliderPicPath)
    {
        
        $this->ProductSliderPicPath = $ProductSliderPicPath;
    }

    public function getProductSliderPicPath()
    {
        return $this->ProductSliderPicPath;
    }
   
    public function setProductSliderPicPath($path)
    {
        $this->ProductSliderPicPath= $path;
    }
}
