<?php

session_start();

if(!isset($_SESSION['login_r']))
  header('location:restaurant_login.php');
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
  <h1 class="text-capitalize text-center text-primary"> Welcome to FoodShala</h1>

</div>

  </body>
</html>
