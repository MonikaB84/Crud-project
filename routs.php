<?php include "./controllers/PetController.php"; 



if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(isset($_POST['save'])){
        PetController::store();
        header("location: ./index.php");
        die;
        

    }
    if(isset($_POST['update'])){
        PetController::update();
        header("location: ./index.php");
        die;
        

    }
    if(isset($_POST['destroy'])){
        PetController::destroy();
        header("location: ./index.php");
        die;
        

    }
    // print_r($_POST);
    // die; 
}
$checked = "";

if($_SERVER['REQUEST_METHOD'] == "GET") {
    if(isset($_GET['edit'])){
        $pet = PetController::show();
        if ($pet->vaccinate) {
            $checked = 'checked';
        }
        
    }

}
$pets = PetController::index();
























?>