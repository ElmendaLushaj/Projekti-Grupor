<?php
include_once 'C:/xampp2/htdocs/Projekti-Grupor/controller/aboutUsController.php';
if (isset($_POST['submitB'])) {
    
    $comment= $_POST['w3review'];
  $view = new InsertView();
    $view->InsertTextForm($comment);

    
    
}
class InsertView
{
    public function InsertTextForm($comment){
    
             
        // dergojme kerkesen ne controller
        $abouText = new AboutUs($comment);
        $controller = new AboutUsController();
        $response = $controller->InsertKoment($abouText);

        if ($response) {
            ?>
                        <h1>Komenti u dergua</h1>
                      
                    <?php
                   header("Location:../homepage.php"); 
                    exit();
                    } else {
                    ?>
                   
                        <h1>Komenti nuk u dergua</h1>
        
          <?php
         // header("Location:../logIb.php"); 
         // exit();
          echo "Register Failed";
                    }
    
}

public function getKomentet()
    {
        // dergojme kerkesen ne controller
        $controller = new AboutUsController();
        $data = $controller->GetK();

        return $data;
}



}



















?>