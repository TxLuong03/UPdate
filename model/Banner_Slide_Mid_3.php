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


      public function getA()
      {
        $list=[];
        $sql="SELECT * FROM bannerslidemid1";
        $rs = $this -> $conn -> query($sql);
        while ( $row -> num_rows >0 )
          {
            $list[]=$row;
            
          }
        return $list;
        
      }

      public function UpdateBannerSlideMid3($id,$title,$img,$des)
      {
        $sql="UPDATE bannerslidemid1 SET title = ? , img=? des=?, WHERE id=? ";
        $stmt = $this -> $conn -> prepare($sql);
        $stmt->bind_param("sssi",$title,$img,$des,$id);
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
