<?php 
  namespace AD\model;

  use Exception;
  use mysqli;

  class Account
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

      public function singin($user, $pass) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM account WHERE name=? AND pass=?");
            $stmt->execute([$user, $pass]);
            $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($rs) > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function singup($user, $pass) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO account(name, pass) VALUES (?, ?)");
            $stmt->execute([$user, $pass]);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    if ($account->singup($user, $pass)) {
        echo "Đăng ký thành công!";
    } else {
        echo "Đăng ký thất bại!";
    }
    
    if ($account->singin($user, $pass)) {
        echo "Đăng nhập thành công!";
    } else {
        echo "Đăng nhập thất bại!";
    }
  }
?>





