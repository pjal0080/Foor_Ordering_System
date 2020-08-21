<?php

include('conn.php');

if(isset($_POST['submit'])){

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$preference = $_POST['foodtype'];

$q = "INSERT INTO `customer`(`fullname`, `username`, `password`, `email`, `contact`, `address`,`preference`) VALUES ('$fullname','$username','$password','$email','$contact','$address','$preference')";


 $query = mysqli_query($con,$q);
 echo $query;
if(!$query)
  echo "insert failed";
else{

  header('location:success_c.php');
}


}

?>
