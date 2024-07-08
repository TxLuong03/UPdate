<?php
  namespace AD\model;
  use mysqli;
  class BannerTop
    {
      private $conn;
       public function con(){
        $nameserver="localhost";
        $username="root";
        $password="";
        $dbname="mysql";

        $this -> conn=new mysqli($nameserver,$username,$password,$dbname);
        
      }
      public function getTitle()
      {
        $sql="SELECT * FROM bannertop";
        $rs= $this-> $conn ->query($sql);
        if($rs -> num_rows > 0)
        {
          $row=$rs->fetch_ossoc();
          return $row['title'];
        }
        else
        {
          echo " NO RESULT";
        }
      }
      public function getButton()
      {
        $sql="SELECT * FROM bannertop";
        $rs= $this-> $conn ->query($sql);
        if($rs -> num_rows > 0)
        {
          $row=$rs->fetch_ossoc();
          return $row['button'];
        }
        else
        {
          echo " NO RESULT";
        }
      }
      public function getImg()
      {
        $sql="SELECT * FROM bannertop";
        $rs= $this-> $conn ->query($sql);
        if($rs -> num_rows > 0)
        {
          $row=$rs->fetch_ossoc();
          return $row['img'];
        }
        else
        {
          echo " NO RESULT";
        }
      }
      public function UpdateBannerTop($id,$title,$button,$img)
      {
        $sql="UPDATE bannertop SET titlt=?, button=?, img=? WHERE id=?";

        $stmt = $this -> $conn -> prepare($sql);
        $stmt->bind_param("sssi",$title,$bt,$img,$id);
        if($stmt->execute())
        {
          return true;
          
        }
        else
        {
          throw new Exception("ERROR");
          
        }
        
      }
    }

?>






