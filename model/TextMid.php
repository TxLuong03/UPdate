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
   public function getA(){
        $listCart = [];
        $sql = "SELECT * FROM textmid";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()){
            $listCart[] = $row;
        }
            return $listCart;
        
    }

    public function updateCartLast($id ,$title, $des){
        $sql = "UPDATE cartlast SET title =?,des =? WHERE id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssi", $title,$des, $id);
        if($stmt->execute()){
            return true;
        } else{
            throw new Exception("Error: ". $this->conn->error);
        }
    }

    }
?>















      
