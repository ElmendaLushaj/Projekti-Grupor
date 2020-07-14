<?php
class AboutUs
{
    private $AboutUsID;
    private $Comment;
   
    
    public function __construct( $Comment)
    {
       
        $this->Comment = $Comment;
        
      
    }

    public function getAboutUsID()
    {
        return $this->AboutUsID;
    }
    public function getPhone()
    {
        return $this->Phone;
    }
    public function getComment()
    {
        return $this->Comment;
    }
    
    public function setComment($name)
    {
        $this->Comment = $name;
    }
   
}
