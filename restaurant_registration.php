<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Registration</title>
    <?php include('base_link.php'); ?>
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
