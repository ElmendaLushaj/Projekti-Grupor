<?php
include_once '../models/productSliderMapper.php';
include_once '../models/productSliderModel.php';
class ProductSliderController
{
    public function InsertProductSlider($SliderProductPicPath)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $productSlider = new productSlider($SliderProductPicPath);
        $productSliderMapper2 = new ProductSliderMapper($productSlider);
        $productSliderMapper2->Insert();
        return true;



    }

    public function GetProductSlider()
    {
        
      
    }
}
