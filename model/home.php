<?php
namespace AD\model;

use mysqli;

class home{
    private $conn;
    public function __construct(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbName = "myDataWeb";

        $this->conn = new mysqli($server, $username, $password, $dbName);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

}



?>
