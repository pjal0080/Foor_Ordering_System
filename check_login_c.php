<?php
session_start();

include('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$password = sha1($password);
$q = "SELECT * FROM `customer` WHERE username = '$username' && password = '$password' ";

$query = mysqli_query($con,$q);
$num = mysqli_num_rows($query);

if($num == 1){
  $_SESSION['login_c'] = $username;
  header('location:login_c.php');
}

else{
die(header('refresh: 3; url=customer_login.php').'Invalid Credentials, wait 3 seconds or just click <a href="customer_login.php">HERE</a> to check again.');
}

 ?>
