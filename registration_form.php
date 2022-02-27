<?php session_start(); ?>
<?php include ('header.php');?>
<br><br><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<style>
body {
    background-image: url("img/r1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
      }
</style>
<body><br><br>
<div class="container">
	<h1 class="text-center icon" style="font-family: 'Lobster', cursive; margin: -30px 0px 30px 0px;">Registration Form</h1>
<div class="row">
	<div class="col-md-4  shadow inner" style="height: 465px;">
		<img src="img/r7.jpeg" style="width: 100%; height: 465px; border-top-left-radius: 20%;">
    <div class="content">
      <h1 style="font-family: 'Lobster', cursive;">Why do we use it?</h1>
          <p style="font-family: 'Kaisei Tokumin', serif; font-size: 20px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum </p>
    </div>
	</div><!-- col-md-4 end -->
	<div class="col-md-4  shadow inner" style="height: 465px;">
		<img src="img/r5.jpeg" style="width: 100%; height: 465px;">
    <div class="content">
      <h1 style="font-family: 'Lobster', cursive;">Where does it come from?</h1>
          <p style="font-family: 'Kaisei Tokumin', serif; font-size: 20px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
    </div>
	</div><!-- col-md-4 end -->
	<div class="col-md-4  shadow p-3 mb-5" style="height: 450px;">
		<div  style=" background: url(img/flower2.jpeg); background-repeat: no-repeat; background-size: cover; border-bottom-right-radius: 20%; height: 460px;margin-top: -14px;">
		<h1 class="text-center" style="font-family: 'Lobster', cursive; color: #fff;">Registration Form</h1>
    <!-- error massege start -->
                  <?php
                       
                    if (isset($_SESSION['email_error'])) {
                        echo '<div class="alert alert-dismissible fade show col-lg-11" role="alert" style= "color:#fff; padding: 0px 0px 0px 20px;">
                          '.$_SESSION['email_error'].'
                            </div>';
                    unset($_SESSION['email_error']);
                  }

                  ?>  
                  <!-- error massege start -->
		<form  method="post" action="user_insert.php" style="padding: 0px 20px 20px;">

	<div class="mb-3">
		<i class="fas fa-user icon"></i>
    <label class="form-label icon">Name:</label>
    <input type="text" class="form-control" name="name" required="required">
  </div>

  <div class="mb-3">
  	<i class="far fa-envelope icon"></i>
    <label class="form-label icon">Email:</label>
    <input type="text" class="form-control" name="email" required="required" value="">
  </div>

  <div class="mb-3">
  	<i class="fas fa-lock icon"></i>
    <label class="form-label icon">Password:</label>
    <input type="password" class="form-control" name="password" required="required">
    <div  class="form-text" style="color: #fff;">We'll never share your password with anyone else.</div>
  </div>


  <button type="submit" class="btn btn-success" value="submit" style="background-image: linear-gradient(to right,#295029,#1ed034);">Submit</button>
  <a href="index.php" type="submit" class="btn btn-success" style="background-image: linear-gradient(to right,#295029,#1ed034);">Login</a>
</form>
</div> <!-- form background img end -->
</div><!-- col-md-4 end -->
</div><!-- row end -->
</div><!-- container end -->
<?php 
 include ('footer.php');
 ?>
</body>
</html>
