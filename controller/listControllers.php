<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/listMapper.php');

class ListController
{
    
    public function GetList()
    {
        
     
    
        $listMapper = new ListMapper();
        $list = $listMapper->getList();
        return $list;
        
      
    
      
    }
}
