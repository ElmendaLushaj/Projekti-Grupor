<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/controller/sliderProductControllers.php';


class InsertView
{
    public function getSliderProducts()
    {
        // dergojme kerkesen ne controller
        $controller = new SliderProductController();
        $data = $controller->GetSliderProduct();

        return $data;
}
}
?>