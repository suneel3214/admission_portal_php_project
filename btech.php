<?php include('session.php'); ?>
<?php include ('header1.php');?>
<br><br><br>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>B.tech Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<style>
body {
    background-image: url("img/r1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
      }
      
.icon{
  color: #fff;
}
</style>
<body><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
    <img src="img/sprit2.png" style="width: 100%; height: 720px;">  
    </div>
		<div class="col-md-8 card shadow" style="background: url(img/r4.jpeg); background-repeat: no-repeat; background-size: cover; height:720px; border-top-right-radius: 25%;border-bottom-left-radius: 15%;">
			<h1 class="text-center icon" style="font-family: 'Lobster', cursive; margin-top: 10px; font-size: 25px;">Admission Form For B.tech</h1>
			<form method="post" action="btech_insert.php" enctype="multipart/form-data" style="padding: 0px 70px;">
				        <div class="mb-3">
                  <i class="fas fa-user icon"></i>
                  <label class="form-label icon">Name:</label>
                  <input type="text" class="form-control" name="name" required="required" placeholder="Enter Your Name" value="<?php echo $_SESSION['n']; ?>">
                </div>
                <div class="mb-3">
                  <i class="far fa-envelope icon"></i>
                  <label class="form-label icon">Email:</label>
                  <input type="text" class="form-control" name="email" required="required" placeholder="Enter Your Email" value="<?php echo $_SESSION['e']; ?>">
                </div>
                <div class="mb-3">
                  <i class="fas fa-building icon"></i>
                  <label class="form-label icon">City:</label>
                  <select class="form-control" name="city" required="required">
                  	<option>Select Your City</option>
                  	<option>Guna</option>
                  	<option>Indore</option>
                  	<option>Bhopal</option>
                  	<option>Gwalior</option>
                  	<option>Shivpuri</option>
                  	<option>Ujjain</option>
                  </select>
                </div>
                <div class="mb-3">
                  <i class="fas fa-address-card icon"></i>
                  <label class="form-label icon">Address:</label>
                  <textarea class="form-control" name="address" required="required" placeholder="Enter Your Address"></textarea>
                </div>
                <div class="mb-3">
                  <i class="fas fa-phone-square-alt icon"></i>
                  <label class="form-label icon">Phone:</label>
                  <input type="text" class="form-control" name="phone" required="required" placeholder="Enter Your Mobile Number">
                </div>
                <div class="mb-3">
                  <i class="fas fa-transgender icon"></i>
                  <label class="form-label icon">Gender:-</label>
                  <input type="radio" name="gender" value="male" required="required"><b style="color: #fff; font-weight: 400;"> Male</b>
                  <input type="radio" name="gender" value="female" required="required"><b style="color: #fff;font-weight: 400;"> Female</b>
                  <input type="radio" name="gender" value="other" required="required"><b style="color: #fff;font-weight: 400;"> Other</b>
                </div>
                <div class="mb-3">
                  <i class="fas fa-images icon"></i>
                  <label class="form-label icon">Image:</label>
                  <input type="file" class="form-control" name="image" required="required">
                </div>
                <button type="submit" class="btn btn-success" value="submit" style="background-image: linear-gradient(to right,#295029,#1ed034);">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html><br><br>

<?php 

include ('footer.php');

 ?>