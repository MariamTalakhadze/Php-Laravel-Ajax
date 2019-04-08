<?php
  include("conn.php");
  class Crud extends DBC{
    public function getsomedata(){
      $stmt= $this->connect()->query("SELECT * FROM words");
      $this->$stmt->execute();
      $result= $this->$stmt->fetchall();
      $i=1;
      foreach ($result as $row) {
        echo "<tr>";
          echo "<td>" .$id. "</td>";
          echo "<td>".$row['Georgian']. "</td>";
          echo "<td>".$row['English']. "</td>";
          echo "form";
          echo ' <td><button type="submit" name="delete">DELETE</button></td>';
          echo ' <td> <button type="submit" name="update">update</button> </td>';
        echo "</tr>";
      }
    }
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>
