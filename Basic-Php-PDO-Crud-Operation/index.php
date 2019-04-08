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
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-11">
          <?php
            include("selectUpdateDelete.php");
            $classac= new Crud;
            echo $classac->getsomedata();
           ?>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
</html>