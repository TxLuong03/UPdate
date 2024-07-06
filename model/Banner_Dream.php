<?php
  namespace AD\model;
  use mysqli;
  use Exception;

  class bannerdream
    private $conn;
    public function con()
    {
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="mysql";

      $this->$conn=new mysqli($servername,$username,$password,$dbname);
    }

    public function getA()

      {
          $list=[];
        $sql=" SELECT * FROM bannerdream";
        $rs=$this->$conn->query($sql);
        while($row=$rs-> fetch_ossoc())
          {
            $list[] = $row;
          }
        return $list;
        
      }
      public function updateBannerDream($is,$title,$img,$des)
      {
        $sql="UPDATE bannerdream SET title=?, img=?, des=? WHERE id=?";
        $stmt= $this -> $conn -> prepare($sql);
        $stmt=bind_param("sssi",$title,$img,$des,$id);
        if($stmt->execute())
        {
          return true;
        }
        else
        {
          throw new Exception("ERROR");
        }
        
      }



      
?>
