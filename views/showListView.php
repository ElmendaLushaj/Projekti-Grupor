<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/controller/listControllers.php');


class InsertView
{

    public function getShoppingList()
    {
        // dergojme kerkesen ne controller
        $controller = new ListController();
        $data = $controller->GetList();

        return $data;
}
     
}
?>