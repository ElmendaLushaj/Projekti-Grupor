<?php
include_once '../models/sliderProductMapper.php';
include_once '../models/sliderProductModel.php';
class SliderProductController
{
    public function InsertSliderProduct($SliderProductPicPath)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $sliderProduct = new sliderProduct($SliderProductPicPath);
        $sliderProductMapper2 = new SliderProductMapper($sliderProduct);
        $sliderProductMapper2->Insert();
        return true;



    }

    public function GetSliderProduct()
    {
        
      
    }
}
