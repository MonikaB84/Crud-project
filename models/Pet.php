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

public static function find($id){
    $pet = new Pet();
    $db = new DB();
    $statment = $db->connect->prepare("SELECT * FROM `pets` where `id` = ?");
    $statment->bind_param("i", $id);
    $statment->execute();
    $result = $statment->get_result();
   
    while($row = $result->fetch_assoc()) 
    {
        $pet = new Pet( $row['id'], $row['pet_title'], $row['name'], $row['price'], $row['vaccinate'], $row['gender'], $row['birthday'] );
    }
    $statment->close();
    $db->connect->close();
    // print_r($pet);
    return $pet;
}

public static function create()
{
    // print_r($_POST);
    // die;
    $db = new DB();
    $statment = $db->connect->prepare("INSERT INTO `pets`(`id`, `pet_title`, `name`, `price`, `vaccinate`, `gender`, `birthday`) VALUES (null,?,?,?,?,?,?)");
    $vaccinated = (isset($_POST['vaccinate'])) ? "1" : "0";
    $statment->bind_param("ssdiis",$_POST['petTitle'],$_POST['name'],$_POST['price'],$vaccinated,$_POST['gender'],$_POST['birthday']);
    $statment->execute();
    $statment->close();
    $db->connect->close();
}

public function update()
{
    // print_r($_POST);
    // die;
    $db = new DB();
    
    $statment = $db->connect->prepare("UPDATE `pets` SET `pet_title`=?,`name`=?,`price`=?,`vaccinate`=?,`gender`=?,`birthday`=? WHERE `id`=?");
   
    $statment->bind_param("ssdiisi", $this->petTitle, $this->name, $this->price, $this->vaccinate, $this->gender, $this->birthday, $this->id);
    $statment->execute();
    $statment->close();
    $db->connect->close();
}

public static function destroy()
{
    // print_r($_POST);
    // die;
    $db = new DB();
    $statment = $db->connect->prepare("DELETE FROM `pets` WHERE `id` = ?");
    
    $statment->bind_param("i",$_POST['id']);
    $statment->execute();
    $statment->close();
    $db->connect->close();
}


}









?>