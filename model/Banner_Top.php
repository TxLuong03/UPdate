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
      public function save()
      {
        $title=$_POST['title'];
        $button=$_POST['bt'];
        $img=$_POST['img'];

        $sql="UPDATE bannertop SET titlt='$title', button='$button', img='$img' WHERE id=1";

        if($this -> $conn ->query($sql)===TRUE)
        {
          header("location: ?act:homepage");
        }
        else
        {
          echo "ERROR"
        }
      }
    }

?>






