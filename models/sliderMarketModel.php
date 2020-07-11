<?php
class SliderMarket
{
    private $SliderMarketID;
    private $SliderMarketPicPath;

    public function __construct($SliderMarketPicPath)
    {
        
        $this->SliderMarketPicPath = $SliderMarketPicPath;
    }

    public function getSliderMarketPicPath()
    {
        return $this->SliderMarketPicPath;
    }
   
   
    public function setSliderMarketPicPath($path)
    {
        $this->SliderMarketPicPath= $path;
    }
}
