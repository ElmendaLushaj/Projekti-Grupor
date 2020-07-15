<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/sliderProductMapper.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/sliderProductModel.php');
class SliderProductController
{
    
    public function GetSliderProduct()
    {
        $sliderMapper = new SliderProductMapper();
        $slider = $sliderMapper->getProducts();
        return $slider;
        
      
    }
}
