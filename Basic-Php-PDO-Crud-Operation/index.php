<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>Dictionary/Simple-Test</title>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-4">
          <!-- forma sityvebis damatebis -->
          <form class="" action="action.php" method="post">
            <div class="row mt-2 d-flex justify-content-center">
              <input type="text" name="georgian" value="" placeholder="GeorgianWord">
            </div>
            <div class="row mt-2 d-flex justify-content-center">
              <input type="text" name="English" value="" placeholder="EnglishWord">
            </div>
            <div class="row mt-2 d-flex justify-content-center">
              <input type="submit" name="Add" value="Add">
            </div>
          </form>
        </div>
      </div>
      <!--  -->
      <div class="row mt-5 ">
        <div class="col-11">
          <form action="selectUpdateDelete.php" method="post">
            <table  border ="1" cellspacing="0" cellpadding="2" >
              <thead>
                <tr>
                  <th> &nbsp; </th>
                  <th> Georgian </th>
                  <th> English </th>

                </tr>
              </thead>
              <tbody>
              <?php
                include("conn.php");
                $db= new DBC;
                $stmt= $db->connect()->prepare("SELECT * FROM words");
                $stmt->execute();
                for($i=0; $row = $stmt->fetch(); $i++){
              ?>
              <tr class="record">
                <td><input name="selector[]" type="checkbox" value="<?php echo $row['id']; ?>"></td>
                <td><?php echo $row['georgian']; ?></td>
                <td><?php echo $row['english']; ?></td>
              </tr>
              <?php
                }
              ?>
              </tbody>
            </table>
            <input type="submit" value="delete" />
          </form>
            
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
