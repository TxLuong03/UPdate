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
        
      }

      public function singin($user,$pass)
      {
        try
        {
          $stmt = this -> $conn ->perpare("SELECT * FROM account WHERE name=? AND pass=?");
          $stmt=bind_param("ss",$user,$pass);
          $stmt -> execute();
          $rs=$stmt->get_result();
          if($rs -> num_rows > 0)
          {
            return true;
          }
          else
          {
            return false;
          }
        }
        catch (Exception $e)
        {
          echo $e -> getMessage();
        }
      }
      public function singup($user,$pass)
      {
        try
        {
          $stmt = $this -> $conn ->prepare("INSERT INTO account(name,pass) VALUES (?,?) ");
          $stmt -> bind_param("ss",$user,$pass);
          $stmt -> execute();
          return true;
        }
        catch(Exception $e)
        {
          echo $e -> getMessage();
          return false;
        }
      }
      
    }
?>





