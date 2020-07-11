<?php
class MarketSlider
{
    private $MarketSliderID;
    private $MarketSliderPicPath;
    public function __construct($MarketSliderPicPath)
    {
        
        $this->MarketSliderPicPath = $MarketSliderPicPath;
    }

    public function getMarketSliderPicPath()
    {
        return $this->MarketSliderPicPath;
    }
   
    public function setMarketSliderPicPath($path)
    {
        $this->MarketSliderPicPath= $path;
    }
}
