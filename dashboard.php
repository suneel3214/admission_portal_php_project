<?php include('session.php'); ?>
<?php include ('header1.php');?>
<?php
include('db_con.php');
$email= $_SESSION["e"];
$data="SELECT * FROM btech where email= '$email'";
$result=mysqli_query($con,$data);
?>
<br><br><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<style>
	     body {
          background-image: url("img/r1.jpeg");
          background-repeat: no-repeat;
          background-size: cover;
              }

	   .inner{
         overflow: hidden;
              }

        .inner a{
         transition: all 1.5s ease;
              }

        .inner:hover a{
         transform: scale(1.5);
         }
         .style{
         	color: #fff;
         	font-family: 'Lobster', cursive;
         }
         .degree{
         	width: 100%;
         	height: 150px;
         	background-image: url("img/r1.jpeg");
          background-repeat: no-repeat;
          background-size: cover;         
         }
	</style>
</head>
<body><br><br>
<div class="container" style="margin-bottom: 120px; margin-top: 20px;" >
	<div class="row text-center">
		<h1 class="text-center style" style="margin-bottom: 30px;">Admission Form Availalbe</h1>
		<div class="col-md-4 inner shadow">
			<?php 

                  if (mysqli_num_rows($result) == 0) {
                  	echo'<a href="btech.php" type="submit" class="btn btn-success degree" style="line-height: 3;font-size: 40px; font-weight: bold; border-bottom-right-radius: 20%;border-top-left-radius: 20%;">B.TECH</a>
			          <h3 class="text-center style">CLICK ME</h3>';
                  } else {
                  	echo'<a href="" type="submit" class="btn btn-success degree" style="line-height: 3;font-size: 40px; font-weight: bold; border-bottom-right-radius: 20%;border-top-left-radius: 20%;">Submitted</a>';			          
                  }
                 
			?>
			<!-- <a href="btech.php" type="submit" class="btn btn-success degree" style="line-height: 3;font-size: 40px; font-weight: bold;font-family: 'Kaisei HarunoUmi', serif;border-bottom-right-radius: 20%;border-top-left-radius: 20%;">B.TECH</a>
			<h3 class="text-center style">CLICK ME</h3> -->
		</div>
		<div class="col-md-4 inner shadow">
			<a href="" type="submit" class="btn btn-success degree" style="margin-top: 30px;line-height: 3;font-size: 40px; font-weight: bold;font-family: 'Kaisei HarunoUmi', serif;border-bottom-right-radius: 20%;border-top-left-radius: 20%;">BCA</a>
			<h3 class="text-center style">CLICK ME</h3>
		</div>
		<div class="col-md-4 inner shadow">
			<a href="" type="submit" class="btn btn-success degree" style="margin-top: 60px;line-height: 3;font-size: 40px; font-weight: bold;font-family: 'Kaisei HarunoUmi', serif;border-bottom-right-radius: 20%;border-top-left-radius: 20%;">MCA</a>
			<h3 class="text-center style">CLICK ME</h3>
		</div>
	</div>
</div>
</body>
</html>
 <?php 

include ('footer.php');

 ?>