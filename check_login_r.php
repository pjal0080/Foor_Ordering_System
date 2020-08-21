<?php
session_start();

include('conn.php');

$name = $_POST['name'];
$password = $_POST['password'];
$password = sha1($password);
$q = "SELECT * FROM `restaurants` WHERE name = '$name' && password = '$password' ";

$query = mysqli_query($con,$q);
$num = mysqli_num_rows($query);

if($num == 1){
  $_SESSION['login_r'] = $name;
  header('location:login_r.php');
}

else{
  die(header('refresh: 3; url=restaurant_login.php').'Invalid Credentials, wait 3 seconds or just click <a href="restaurant_login.php">HERE</a> to check again.');

}

 ?>
