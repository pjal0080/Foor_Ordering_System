<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Registration</title>
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
    <title></title>
  </head>
  <body>

<?php
include('base.php');
?>
    <div class="container" >
      <h1 class ="text-center text-capitalize pt-5">Restaurant Registration</h1>
      <hr class = "w-50 mx-auto pt-5">
      <div class="w-50 mx-auto my-auto">


      <form action="check_regis_r.php" method="POST">

        <div class="form-group">
          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
        </div>

        <div class="form-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number" required="">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="">
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="address" name="password" placeholder="Password" required="">
        </div>

        <div class="form-group">
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD RESTAURANT </button>
        </div>

        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="customer_login.php">Have an account? Login.</a></label>

      </form>
      </div>

      </div>



  </body>
</html>
