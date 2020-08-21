<?php

session_start();

if(!isset($_SESSION['login_c']))
  header('location:customer_login.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('base_link.php'); ?>
    <title></title>
  </head>
  <body>
<header>
  <?php
include('base.php');
   ?>
</header>



<div class="jumbotron">
  <h1 class="text-capitalize text-center"> Welcome <?php echo $_SESSION['login_c'] ?></h1>
  <h2 class = "text-center">Now order food with a <a href="menu.php">click</a></h2>
</div>

  </body>
</html>
