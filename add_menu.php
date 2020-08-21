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
    <title>Add Menu</title>

  </head>
  <body>

    <header>
      <?php
      include('base.php');
       ?>
    </header>

    <div class="container w-50 mx-auto">
      <form action="food_check.php" method="POST">
      <br style="clear: both">
        <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW FOOD ITEM HERE </h3>

        <div class="form-group">
          <input type="text" class="form-control" id="name" name="name" placeholder="Your Food name" required="">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="price" name="price" placeholder="Your Food Price (INR)" required="">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="description" name="description" placeholder="Your Food Description" required="">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="">
        </div>
        <div class="form-group">
          <select class="form-control" name = "foodtype" required>
            <option disabled selected hidden>Your Food Type</option>
            <option>Veg</option>
            <option>Non-veg</option>
          </select>
        </div>
        <div class="form-group">
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD FOOD </button>
        </div>
      </form>

    </div>








  </body>
</html>
