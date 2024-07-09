<?php
  namespace AD\model;
  use Exception;
  use mysqli;

  class textmid
    {
       private $conn;
       public function con(){
        $nameserver="localhost";
        $username="root";
        $password="";
        $dbname="mysql";

        $this -> conn=new mysqli($nameserver,$username,$password,$dbname);
    }
  public function getA() {
    $list = [];
    $sql = "SELECT * FROM textmid";
    $result = $this->conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $list[] = $row;
        }
        $result->close(); 
    } else {
        throw new Exception("Query execution failed: " . $this->conn->error);
    }
    $this->conn->close();
    return $list;
    }


   public function updateTextMid($id, $title, $des) {
    $sql = "UPDATE textmid SET title = ?, des = ? WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    if ($stmt->execute([$title, $des, $id])) {
        return true;
    } else {
        throw new Exception("Error: " . $this->conn->error);
    }
    }


    }
?>















      
