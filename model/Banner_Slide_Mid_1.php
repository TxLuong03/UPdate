<?php
  namespace AD\model;
  use mysqli;
  use Exception;
  class BannerSlideMid1
    {
      private $conn;
      public function con()
      {
        $servername="localhost";
        $username="root";
        $pass="";
        $dbname="mysql";

        $this -> $conn = new mysqli($servername,$username,$pass,$dbname);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
      }


      public function getA()
        {
            $list = [];
            $sql = "SELECT * FROM bannerslidemid1";
            $result = $this->conn->query($sql);
        
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $list[] = $row;
                }
            } else {
                echo "Không có dữ liệu từ câu truy vấn.";
            }
        
            return $list;
        }


      public function UpdateBannerSlideMid1($id,$titlxe,$bt,$img,$des)
      {
        try{
        $sql="UPDATE bannerslidemid1 SET title = ? ,button=? img=?, des=?, WHERE id=? ";
        $stmt = $this -> $conn -> prepare($sql);
        if (!$stmt) {
            throw new Exception("Prepare statement failed: " . $this->conn->error);
        }
        $stmt->execute([$title,$button, $img, $des, $id]);
        return true;
        }
          catch (Exception $e) {
          echo "Error: " . $e->getMessage();
      } finally {
          $stmt->close();
          $this->conn->close();
      }
      }
    }

?>
