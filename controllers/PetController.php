<?php include "./models/Pet.php";

class PetController {
   
    public static function index()
    {
        $pets = Pet::all();
        return $pets;
    }








}

















?>