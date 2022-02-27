<?php 
include ('db_con.php');

 $n = $_POST['name'];
 $e = $_POST['email'];
 $c = $_POST['city'];
 $a = $_POST['address'];
 $p = $_POST['phone'];
 $g = $_POST['gender'];
 // $i = $_FILES['image'];
 // // echo "<pre>";
 // // print_r($i);

$img = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

$file = "upload/".$img;

move_uploaded_file($tmp_name, $file);

$data = "insert into bsc(name,email,city,address,phone,gender,image)values('$n','$e','$c','$a','$p','$g','$file')";

$result = mysqli_query($con,$data);
header('location:bsc_admin_display.php');
 ?>