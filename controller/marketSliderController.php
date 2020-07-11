<?php
include_once '../models/marketSliderMapper.php';
include_once '../models/marketSliderModel.php';
class MarketSliderController
{
    public function InsertMarketSlider($SliderMarketPicPath)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $marketSlider = new marketSlider($SliderMarketPicPath);
        $marketSliderMapper2 = new MarketSliderMapper($marketSlider);
        $marketSliderMapper2->Insert();
        return true;



    }

    public function GetMarketSlider()
    {
        
      
    }
}
