<?php
include_once '../models/sliderMarketMapper.php';
include_once '../models/sliderMarketModel.php';
class SliderMarketController
{
    public function InsertSliderMarket($SliderMarketPicPath)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $sliderMarket = new sliderMarket($SliderMarketPicPath);
        $sliderMarketMapper2 = new SliderMarketMapper($sliderMarket);
        $sliderMarketMapper2->Insert();
        return true;



    }

    public function GetSliderMarket()
    {
        
      
    }
}
