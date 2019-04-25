<?php
  include("conn.php");
  class user extends DBC{
    private  $geo;
    private $en;
    public function insertsomerow(){
       $geo=$_POST['georgian'];
       $en= $_POST['English'];
       $sql="INSERT INTO words (georgian, english) VALUES(:georgian, :english)";
       $stmt=$this->connect()->prepare($sql);
       $stmt->bindParam(':georgian', $geo);
       $stmt->bindParam(':english', $en);
       $stmt->execute();
       header("location:index.php");
     }
  }
  $ec= new user;
  echo $ec->insertsomerow();
 ?>
