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
        
      }
    }

?>
