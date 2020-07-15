<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/controller/sliderProductControllers.php');


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