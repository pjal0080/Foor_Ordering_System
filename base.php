<style >
  ul li{
  font-size: 25px;

  }
  ul{
    margin-right: 5% !important;
  }

</style>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="index.php">
      <img src="images/c492cd5e-29ef-4979-82a3-2ab06d1a08f9_200x200.jpg" alt="logo" style="width:50px;">
    </a>

<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class = "nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="menu.php">Menu</a>
  </li>

<?php

if(!isset($_SESSION['login_c']) && !isset($_SESSION['login_r'])){

 ?>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Signup
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="customer_registration.php">Customer</a>
      <a class="dropdown-item" href="restaurant_registration.php">Restaurant</a>
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Login
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="customer_login.php">Customer</a>
      <a class="dropdown-item" href="restaurant_login.php">Restaurant</a>
    </div>
  </li>
<?php
}
else if(isset($_SESSION['login_c'])){
 ?>
 <li class="nav-item">
   <a class="nav-link" href="login_c.php">Welcome <?php echo $_SESSION['login_c']; ?></a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="view_orders_c.php">View Orders</a>
 </li>
  <li class="nav-item">
    <a class="nav-link" href="logout_c.php">logout</a>
  </li>


  <?php
  }
  else{

   ?>
   <li class="nav-item">
     <a class="nav-link" href="login_r.php">Welcome <?php echo $_SESSION['login_r']; ?></a>
   </li>
 <li class="nav-item">
   <a class="nav-link" href="view_orders.php">View Orders</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="add_menu.php">Add Menu</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="logout_r.php">logout</a>
 </li>
<?php
  }
 ?>

  </ul>
</nav>
