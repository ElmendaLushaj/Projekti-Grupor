<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/sliderMarketMapper.php';
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/sliderMarketModel.php';
class SliderMarketController
{
    public function GetSliderMarket()
    {
        $sliderMapper = new SliderMarketMapper();
        $slider = $sliderMapper->getMarkets();
        return $slider;
        
      
    }
}
