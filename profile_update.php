<?php 

include ('db_con.php');
$i = $_POST['id'];
$p = $_POST['password'];

$data = "update user set password = '$p' where id = '$i'";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
// die;

if ($result) {
	header('location:profile.php');
}
 ?>