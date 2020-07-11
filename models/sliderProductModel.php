<?php
class SliderProduct
{
    private $SliderProductID;
    private $SliderProductPicPath;

    public function __construct($SliderProductPicPath)
    {
        
        $this->SliderProductPicPath = $SliderProductPicPath;
    }

    public function getSliderProductPicPath()
    {
        return $this->SliderProductPicPath;
    }
   
   
    public function setSliderProductPicPath($path)
    {
        $this->SliderProductPicPath= $path;
    }
}
