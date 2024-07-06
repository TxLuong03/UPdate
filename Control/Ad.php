<?php
  namespace AD\Control;
  use AD\model\Account;
  class AdControl
    {
      public function logout()
      {
        session_unset();
        session_destroy();
        header("location: ?act=SignIn");
        
      }
      public function SignIn()
      {
        $not="";
        require_once "./view/SingIn.php";
      }
      public function SingUp()
      {
        $not="";
        require_once "./view/SingUp.php"; 
      }
      public function processSingIn()
      {
        $acc=new Account();
        if ( $_SERVER["REQUEST_METHOD" ] == " POST " )
        {
          $user = $_POST["user"];
          $pass = $_POST["pass"];
          if($acc -> SignIn($user,$pass))
          {
            $_SESSION["user"]=$user;
            header ("location: ?act =homepage");
          }
          else
          {
              $not= " ERROR";
          }
            
        }
          
        
      }
    }
?>











