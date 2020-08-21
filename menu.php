<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style >
      *{
          margin: 0;padding: 0;font-family: 'Josefin Sans', sans-serif;
      }

    </style>
    <title>Menu page</title>

  </head>
  <body>

    <header>
      <?php
      include('base.php');
      ?>

      <h1 class="text-center pt-5"> Welcome to FoodShala</h1>


    </header>


    <div class="container">

    <?php

    include 'conn.php';

    $sql = "SELECT * FROM `food` ORDER BY F_ID";
    $result = mysqli_query($con, $sql);


    if (mysqli_num_rows($result) > 0)
    {
      $count=0;

      while($row = mysqli_fetch_assoc($result)){

        if ($count == 0)
          echo "<div class='row pt-5 pb-2'>";

    ?>
    <div class="col-lg-4 col-md-3 pr-5">

    <form method="post" action="order.php">
    <div class="mypanel" align="center";>
      <div class="view zoom">
        <img src="<?php echo $row["image_path"]; ?>" class="img-fluid">
      </div>

    <h4 class="text-dark"><?php echo $row["name"]; ?></h4>
    <h5 class="text-info"><?php echo $row["description"]; ?></h5>
    <h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
    <h5 class="text-dark">by
      <?php $s = "SELECT name from `restaurants` where R_ID = {$row['R_ID']}";
      $x = mysqli_query($con,$s);
      $res = mysqli_fetch_assoc($x);
      echo $res['name'];?>
    </h5>
    <h5 class="text-info">Quantity: <input type="number" min="1" max="10" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
    <input type="hidden" name="hidden_R_ID" value="<?php echo $row["R_ID"]; ?>">
    <input type="hidden" name="hidden_F_ID" value="<?php echo $row["F_ID"]; ?>">
    <input type="submit" name="order" style="margin-top:5px;" class="btn btn-success" value="Order">
    </div>
    </form>


    </div>

    <?php

    $count++;
    if($count==3)
    {
      echo "</div>";
      $count=0;
    }
    }
    ?>
    </div>

    <?php
    }
    else
    {
      ?>

      <div class="container">
        <div class="jumbotron">
          <center>
             <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
            <p>Stay Hungry...! :P</p>
          </center>

        </div>
      </div>

      <?php

    }

    ?>






  </body>
</html>
