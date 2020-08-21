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
