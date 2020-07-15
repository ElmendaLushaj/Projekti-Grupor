<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/sliderMarketMapper.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/sliderMarketModel.php');
class SliderMarketController
{
    public function GetSliderMarket()
    {
        $sliderMapper = new SliderMarketMapper();
        $slider = $sliderMapper->getMarkets();
        return $slider;
        
      
    }
}
