<?php 
session_start();
include ('db_con.php');
$n = $_POST['name'];
$e = $_POST['email'];
$p = $_POST['password'];


$emailcheck = mysqli_query($con,"select * from user where email = '$e'");
// echo "<pre>";
// print_r($emailcheck);
// die;

if (mysqli_num_rows($emailcheck)>0) {
	$_SESSION['email_error'] = "This email id is already registered";
	echo header('location:registration_form.php');
} else {
	$data = "insert into user (name,email,password)values('$n','$e','$p')";
	mysqli_query($con,$data);
	header('location:index.php');
}

 ?>

