<?php 
session_start();
include ('db_con.php');


$e = $_POST['email'];
$p = $_POST['password'];

$data = "select * from user where email = '$e' && password = '$p'";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$total = mysqli_num_rows($result);

$a = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($a);
// die;


if ($total == 1) {
	$_SESSION['e'] = $e;
	$_SESSION['n'] = $a['name'];
	header('location:dashboard.php');
} else {
	$_SESSION['error'] = "invalid username or password";
	header('location:index.php');
}

 ?>