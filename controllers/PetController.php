<?php include "./models/Pet.php";

class PetController {
   
    public static function index()
    {
        $pets = Pet::all();
        return $pets;
    }

    public static function show()
    {
        $pet = Pet::find($_GET['id']);
        return $pet;
    }

    public static function store()
    {
        Pet::create();
    }

    public static function update()
    {
        $isVaccinated = (isset($_POST['IsVaccinated'])) ? "1" : "0";
        $pet = new Pet();
        $pet->id = $_POST['id'];
        $pet->petTitle = $_POST['petTitle'];
        $pet->name = $_POST['name'];
        $pet->price = $_POST['price'];
        $pet->vaccinate = $isVaccinated;
        $pet->gender = $_POST['gender'];
        $pet->birthday = $_POST['birthday'];
        $pet->update();
    }

    public static function destroy()
    {
        Pet::destroy($_POST['id']);
    }




}

















?>