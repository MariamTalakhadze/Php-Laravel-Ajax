<?php
  include("conn.php");
  class Crud extends DBC{
    public function getsomedata(){
      $stmt= $this->connect()->prepare("SELECT * FROM words");
      $stmt->execute();
      $result= $stmt->fetchall();
      $i=1;
      foreach ($result as $row) {
        echo "<tr>";
          echo "<td>" .$i. "</td>";
          $i+=1;
          echo "<td>".$row['georgian']. "</td>";
          echo "<td>".$row['english']. "</td>";
          echo ' <td><button type="submit" name="delete" value="'.$row['id'].'">DELETE</button></td>';
          echo ' <td> <button type="submit" name="update" value="'.$row['id'].'">update</button> </td>';
          echo "</br>";
        echo "</tr>";
        // echo "console.log($_POST[])";
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
