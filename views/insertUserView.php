<?php
include_once '../controller/userControlles.php';
if (isset($_POST['submitbtn'])) {
    $emri = $_POST['emri'];
    $email= $_POST['email'];
    $paswordi = $_POST['paswordi'];
    $view = new InsertView();
    $view->insertUser($emri, $email, $paswordi);
}

class InsertView
{
    public function insertUser($emri, $email, $paswordi)
    {
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $response = $controller->InsertUser($emri, $email, $paswordi);

     if ($response) {
        echo "Useri u shtua";

        } else {
            echo "Useri nuk u shtua";
        }
    }
}
?>