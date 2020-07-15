<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/controller/sliderMarketControllers.php');

class InsertView2
{
    public function getSliderMarket()
    {
        // dergojme kerkesen ne controller
        $controller = new SliderMarketController();
        $data = $controller->GetSliderMarket();

        return $data;
}
}
?>