<?php

session_start();
if(!isset($_SESSION['login_r']))
  header('location:restaurant_login.php');


include('conn.php');
$foodname = $_POST['name'];
$foodprice = $_POST['price'];
$fooddescp = $_POST['description'];
$image = $_POST['images_path'];
$foodtype = $_POST['foodtype'];
$user = $_SESSION['login_r'];
$rid = "SELECT R_ID FROM `restaurants` WHERE name='$user'";
$res = mysqli_query($con,$rid);
$R_IDrs = mysqli_fetch_array($res, MYSQLI_BOTH);
$ridu = $R_IDrs['R_ID'];

$q = "INSERT INTO `food`(`name`, `price`, `description`, `image_path`, `R_ID`, `food_type`) VALUES ('$foodname','$foodprice','$fooddescp','$image','$ridu','$foodtype')";

$query = mysqli_query($con,$q);



if(!$query)
  echo "insert failed";
else{
header('location:add_menu.php');
}





?>
