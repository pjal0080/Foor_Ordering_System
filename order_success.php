<?php

session_start();
if(!isset($_SESSION['login_c']))
  header('location:customer_login.php');
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include('base_link.php'); ?>
    <title>Order Success</title>
  </head>
  <body>
    <header>
      <?php include('base.php'); ?>
    </header>
    <div class="jumbotron">
      <h1 class="text-center mt-5">You have successfully placed your order!</h5>
    </div>


  </body>
</html>
