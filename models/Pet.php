<?php 
include "./models/DB.php";
class Pet {
    public $petTitle;
    public $ame;
    public $price;
    public $vaccinate;
    public $gender;
    public $birthday;

public function __construct($id = null, $petTitle = null, $name = null, $price = null, $vaccinate = null, $gender = null, $birthday = null)
{
    $this->id = $id;
    $this->petTitle = $petTitle;
    $this->name = $name;
    $this->price = $price;
    $this->vaccinate = $vaccinate;
    $this->gender = $gender;
    $this->birthday = $birthday;
}
public static function all(){
    $pets = [];
    $db = new DB();
    $query = "SELECT * FROM `pets`";
    $result = $db->connect->query($query);
    
    
    while($row = $result->fetch_assoc()) 
    {
        $pets[] = new Pet( $row['id'], $row['pet_title'], $row['name'], $row['price'], $row['vaccinate'], $row['gender'], $row['birthday'] );
    }

    $db->connect->close();
    return $pets;
}



}









?>