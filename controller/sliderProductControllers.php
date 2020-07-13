<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/sliderProductMapper.php';
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/sliderProductModel.php';
class SliderProductController
{
    
    public function GetSliderProduct()
    {
        $sliderMapper = new SliderProductMapper();
        $slider = $sliderMapper->getProducts();
        return $slider;
        
      
    }
}
