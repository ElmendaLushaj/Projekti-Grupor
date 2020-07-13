<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/marketMapper.php';
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/marketModel.php';
class MarketController
{
    public function InsertMarket($MarketName, $Address, $Phone)
    {
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert user ndatabase
        $market = new market($MarketName, $Address, $Phone);
        $marketMapper2 = new MarketMapper($market);
        $marketMapper2->Insert();
        return true;



    }

    public function GetMarket()
    {
        
      
    }
}
