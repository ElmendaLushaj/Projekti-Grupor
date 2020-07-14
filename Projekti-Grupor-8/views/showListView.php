<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/controller/listControllers.php';


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