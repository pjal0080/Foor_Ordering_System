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
    <title>Customer Order Details</title>
  </head>
  <body>
    <header>
      <?php
      include('base.php');
       ?>
    </header>

<h1 class = "mt-5 text-center">Here are your orders</h1>
  <section class="mt-5 mx-auto">
<?php
include('conn.php');
$user_check=$_SESSION['login_c'];
$sql = "SELECT * FROM orders WHERE username = '$user_check'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{


 ?>
 <div class="container">


 <table class=" table table-striped table-hover table-bordered">
   <thead>
     <tr>
       <th> Order ID </th>
       <th> Food ID </th>
       <th> Food Name </th>
       <th> Price </th>
       <th> Quantity </th>
       <th> Restaurant </th>
     </tr>
   </thead>


   <?php

     while($row = mysqli_fetch_assoc($result)){
   ?>

 <tbody>
   <tr>
     <td><?php echo $row["O_ID"]; ?></td>
     <td><?php echo $row["F_ID"]; ?></td>
     <td><?php echo $row["foodname"]; ?></td>
     <td><?php echo $row["price"]; ?></td>
     <td><?php echo $row["quantity"]; ?></td>
     <td><?php $s = "SELECT name from `restaurants` where R_ID = {$row['R_ID']}";
      $x = mysqli_query($con,$s);
      $res = mysqli_fetch_assoc($x);
      echo $res['name']; ?></td>
   </tr>
 </tbody>

 <?php } ?>
 </table>
 </div>
   <br>


 <?php } else { ?>

 <h4><center>0 RESULTS</center></h4>

 <?php } ?>


</section>


  </body>
</html>
