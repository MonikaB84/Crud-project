<?php 

class Pet {
    public $petTitle;
    public $price;
    public $vaccinate;
    public $gender;
    public $birthday

public function __construct($id = null, $title = null, $price = null, $vaccinate = null, $gender = null, $birthday = null)
{
    $this->id = $id;
    $this->title = $title;
    $this->price = $price;
    $this->vaccinate = $vaccinate;
    $this->gender = $gender;
    $this->birthday = $birthday;
}




}









?>