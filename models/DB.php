<?php

class DB {
    public $connect;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "Pet_shelter";
        $this->connect = new mysqli($servername, $username, $password, $db);
    }
}


?>