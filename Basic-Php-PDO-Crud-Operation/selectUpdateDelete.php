<?php
  include("conn.php");
  class Crud extends DBC{
    public function delete(){
      $edittable=$_POST['selector'];
      $N = count($edittable);
      for($i=0; $i < $N; $i++)
      {
        $result = $this->connect()->prepare("DELETE FROM words WHERE id= :memid");
        $result->bindParam(':memid', $edittable[$i]);
        $result->execute();
      }
    }
    public function update(){
      
    }
  }
  $del= new Crud;
  $dele=$del->delete();
  echo $dele;
  header("location: index.php");
 ?>