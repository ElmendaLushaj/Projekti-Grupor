<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/controller/sliderMarketControllers.php';

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