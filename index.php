<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Home Page</title>
      <?php include('base_link.php');>
  </head>
  <body>

<header>
  <?php
  include("base.php");
   ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-6">
      <div class="container">
        <a href="#">
          <img class = "logo" src="images/c492cd5e-29ef-4979-82a3-2ab06d1a08f9_200x200.jpg">
        </a>
       <h1 id = "hd1" class"text-center">Order food in one click</h1>
         <button id = "btt" type="submit" name="button" class = "btn btn-success" onclick = "document.location = 'menu.php'"> Order Now</button>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-6">
      <img id = "img1" src="images/Webp.net-resizeimage.jpg" >
    </div>
  </div>
  </div>

</header>
<section class="sect">

  <div class="container-fluid ">
    <h1 class = " text-white text-center text-capitalize py-4">about us</h1>
  </div>

</section >

<br>
<div class="container-fluid mb-2">
  <div class="row">

    <div class="col-lg-6 col-md-6">
      <img src="images/food_order.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6">
      <h3 class="text-center pt-4 display-4"> At FoodShala</h3>
      <h5 class="display-5"> We are committed to nurturing a neutral platform and are helping food establishments maintain high standards through Hyperpure. Food Hygiene Ratings is a coveted mark of quality among our restaurant partners.</h5>
    </div>

  </div>
</div>

<br>

<section class="sect my-3">

<div class="container-fluid">

  <h1 class="text-white text-center py-4">Top Restaurant Chains</h1>

</div>

</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <ul style="list-style-type:none;">
          <li>Biryani Mahal</li>
          <li>Mom's Kitchen</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3">
        <ul style="list-style-type:none;">
          <li>KFC</li>
          <li>Mcdonald's</li>
        </ul>
      </div>

    <div class="col-lg-3 col-md-3">
      <ul style="list-style-type:none;">
        <li>Pizza Hut</li>
        <li>Domino's</li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-3">
      <ul style="list-style-type:none;">
        <li>Behrouz</li>
        <li>Subway</li>
      </ul>
    </div>

    </div>

  </div>
</section>
<br>


<section class="sect my-3">

<div class="container-fluid">

  <h1 class="text-white text-center py-4">Cities we deliver to</h1>

</div>

</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <ul style="list-style-type:none;">
          <li>Ahemdabad</li>
          <li>Agra</li>
          <li>Agartala</li>
          <li>Bhopal</li>
          <li>Bhubaneshwar</li>
          <li>Bangalore</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3">
        <ul style="list-style-type:none;">
          <li>Chennai</li>
          <li>Coimbatore</li>
          <li>Dhanbad</li>
          <li>Durgapur</li>
          <li>Dehradun</li>
          <li>Darjeeling</li>
        </ul>
      </div>

    <div class="col-lg-3 col-md-3">
      <ul style="list-style-type:none;">
        <li>Delhi</li>
        <li>Erode</li>
        <li>Fatehpur</li>
        <li>Gaya</li>
        <li>Ghaziabad</li>
        <li>Guwahati</li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-3">
      <ul style="list-style-type:none;">
        <li>Hyderabad</li>
        <li>Haridwar</li>
        <li>Indore</li>
        <li>Jhansi</li>
        <li>Kalyani</li>
        <li>Kolkata</li>
      </ul>
    </div>

    </div>

  </div>
</section>
<br>







<footer class="bg-dark mt-3">

  <p class="text-center p-2 text-white">&#169;foodshala</p>
</footer>




  </body>
</html>
