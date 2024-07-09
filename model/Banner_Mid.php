<?php
  namespace AD\model;
  use Exception;
  use mysqli;

  class bannermid
    {
       private $conn;
       public function con(){
        $nameserver="localhost";
        $username="root";
        $password="";
        $dbname="mysql";

        $this -> conn=new mysqli($nameserver,$username,$password,$dbname);

         if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function getBannerMid()
      {
          try
          {
            $stmt= $this -> $conn -> prepare ("SELECT img FROM bannermid WHERE id=2");
            if(!$stmt)
            {
              throw new Exception("ERROR");
            }
            $stmt ->execute();
            $rs = $stmt -> get_result();
            if($rs-> num_rows > 0)
            {
              $row= $rs ->fetch_ossoc();
              return $row['img'];
            }
            else 
            {
              throw new Exception("NO FOUND");
            }
          }
          catch (Exception $e)
          {
            echo "Error ". $e ->getMessage();
            
          }
        finally
          {
            $stmt -> close();
            $this=>$conn->close();
          }
        
      }
      public function updateBannerMid($id, $img) {
          try {
              $sql = "UPDATE bannermid SET img = '$img' WHERE id = $id";
              $stmt = $this->conn->prepare($sql);
      
              if ($result === false) {
                  throw new Exception("Execute statement failed: " . $this->conn->error);
              }
              $stmt->execute([$img,$id]);
              return true;
          } catch (Exception $e) {
              echo "Error: " . $e->getMessage();
              return false;
          } finally {
              $stmt->close();
              $this->conn->close();
          }
      }


}
?>















      
