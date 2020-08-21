<?php

include('conn.php');

if(isset($_POST['submit'])){

$name = $_POST['name'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$q = "INSERT INTO `restaurants`(`name`, `email`, `contact`, `address`,`password`) VALUES ('$name','$email','$contact','$address','$password')";


 $query = mysqli_query($con,$q);

 if(!$query)
  echo "insert failed";
  else{
  header('location:success_r.php');
  }


}

?>
