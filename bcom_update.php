<?php 
include ('db_con.php');

 $i = $_POST['id'];
 $n = $_POST['name'];
 $e = $_POST['email'];
 $c = $_POST['city'];
 $a = $_POST['address'];
 $p = $_POST['phone'];
 $g = $_POST['gender'];
// $img = $_FILES['image'];
// echo "<pre>";
// print_r($img);

 $img = $_FILES['image']['name'];
 $tmp_name = $_FILES['image']['tmp_name'];
 $file = "upload/".$img;

 move_uploaded_file($tmp_name, $file);

 if ($img == "" ) {
 	$data = "update bcom set name = '$n' , email = '$e' , city = '$c' , address = '$a' , phone = '$p' , gender = '$g' where id = '$i'";
 	$result = mysqli_query($con,$data);
 	header('location:bcom_admin_display.php');
 } else {
 	$data = "update bcom set name = '$n' , email = '$e' , city = '$c' , address = '$a' , phone = '$p' , gender = '$g', image = '$file' where id = '$i'";
 	$result = mysqli_query($con,$data);
 	header('location:bcom_admin_display.php');
 }
 

 ?>