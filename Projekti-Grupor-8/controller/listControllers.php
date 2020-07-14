<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/models/listMapper.php';

class ListController
{
    
    public function GetList()
    {
        
     
    
        $listMapper = new ListMapper();
        $list = $listMapper->getList();
        return $list;
        
      
    
      
    }
}
