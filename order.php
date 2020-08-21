<?php

  session_start();
  include('conn.php');
  if(isset($_POST['order'])){

    if(!isset($_SESSION['login_c'])){
      header('location:customer_login.php');
    }



else{
  $food = $_POST['hidden_name'];
  $price = $_POST['hidden_price'];
  $quantity = $_POST['quantity'];
  $fid = $_POST['hidden_F_ID'];
  $rid = $_POST['hidden_R_ID'];
  $username = $_SESSION['login_c'];
  $in = "INSERT INTO `orders`(`F_ID`, `R_ID`, `foodname`, `price`, `username`, `quantity`) VALUES ('$fid','$rid','$food','$price','$username','$quantity')";
  $q = mysqli_query($con,$in);

  if(!$q)
    echo "insertion unsuccessfull";
  else{
    header('location:order_success.php');
  }


}










}

 ?>
