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
        require_once "./view/SingIn";
      }
      public function SingUp()
      {
        $not="";
        require_once "./view/SingUp"; 
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
      public function processSingUp()
      {
        $acc=new Account();
        if ( $_SERVER["REQUEST_METHOD" ] == " POST " )
        {
          $user = $_POST["user"];
          $pass = $_POST["pass"];
          $re_pass=$_POST["re_pass"];
          if($this->checkPassword($re_pass, $pass) == false)
          {
            $notice = "password and repasword is incorrect";
            require_once "./view/SignUp";
            exit();
          }
          if($acc->SingUp($user, $pass)){
                header("Location:?act=Signin");
            }else{
                echo " ERROR";
            }
            
        }
          
        
      }
      public function checkPassword($pass, $re_pass){
        if($pass == $re_pass){
            return true;
        }else{
            return false;
        }
    }
    }
?>











