<?php include "./controllers/PetController.php"; 

$pets = PetController::index();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);
    die;
}


























?>