<?php
  namespace AD\model;
  use mysqli;
  use Exception;

  class bannerdream
  {
    private $conn;
    public function con()
    {
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="mysql";

      $this->$conn=new mysqli($servername,$username,$password,$dbname);

       if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
        }
    }

   public function getA() {
          $list = [];
          $sql = "SELECT * FROM bannerdream";
          
          try {
              $rs = $this->conn->query($sql);
              
              if (!$rs) {
                  throw new Exception("Query failed: " . $this->conn->error);
              }
              
              while ($row = $rs->fetch_assoc()) {
                  $list[] = $row;
              }
              
          } catch (Exception $e) {
              echo "Error: " . $e->getMessage();
          } finally {
              $rs->close();
          }
          
          return $list;
      }

      public function updateBannerDream($id, $title, $img, $des) {
      try {
        $sql = "UPDATE bannerdream SET title = ?, img = ?, des = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . $this->conn->error);
        }
        $stmt->execute([$title, $img, $des, $id]);
        return true;
      } catch (Exception $e) {
          echo "Error: " . $e->getMessage();
      } finally {
          $stmt->close();
          $this->conn->close();
      }
    }


  }

      
?>
