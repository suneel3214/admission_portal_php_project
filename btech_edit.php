<?php include('session.php'); ?>

<?php 
include('db_con.php');

$id = $_GET['e'];

$data = "select * from btech where id = $id";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
// die;

$a = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($a);
// die;

 ?>

<?php include ('header1.php');?>

<br><br><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>B.tech Edit</title>
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
    <img src="img/sprit2.png" style="width: 100%; height: 770px;">  
    </div>
		<div class="col-md-8 card shadow" style="background: url(img/r4.jpeg); background-repeat: no-repeat; background-size: cover;height:770px; border-top-right-radius: 25%;border-bottom-left-radius: 15%;">
			<h1 class="text-center" style="font-family: 'Lobster', cursive;margin-top: 10px; color: #fff; font-size: 25px;">Admission Form For B.tech</h1>
			<form method="post" action="btech_update.php" enctype="multipart/form-data" style="padding: 0px 70px;">
        <input type="hidden" name="id" value="<?php echo $a['id'] ?>">
				        <div class="mb-3">
                  <i class="fas fa-user icon"></i>
                  <label class="form-label icon">Name:</label>
                  <input type="text" class="form-control" name="name" required="required" value="<?php echo $a['name'] ?>" placeholder="Enter Your Name">
                </div>
                <div class="mb-3">
                  <i class="far fa-envelope icon"></i>
                  <label class="form-label icon">Email:</label>
                  <input type="text" class="form-control" name="email" required="required" value="<?php echo $a['email'] ?>" placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                  <i class="fas fa-building icon"></i>
                  <label class="form-label icon">City:</label>
                  <select class="form-control" name="city" required="required">
                  	<option>Select Your City</option>
                  	<option


                       <?php 


                         if ($a['city']=='Guna') {
                           echo "selected";
                         }

                        ?>

                    >Guna</option>
                  	<option

                       <?php 


                         if ($a['city']=='Indore') {
                           echo "selected";
                         }

                        ?>


                    >Indore</option>
                  	<option

                       <?php 


                         if ($a['city']=='Bhopal') {
                           echo "selected";
                         }

                        ?>

                    >Bhopal</option>
                  	<option

                       <?php 


                         if ($a['city']=='Gwalior') {
                           echo "selected";
                         }

                        ?>

                    >Gwalior</option>
                  	<option

                       <?php 


                         if ($a['city']=='Shivpuri') {
                           echo "selected";
                         }

                        ?>

                    >Shivpuri</option>
                  	<option

                       <?php 


                         if ($a['city']=='Ujjain') {
                           echo "selected";
                         }

                        ?>

                    >Ujjain</option>
                  </select>
                </div>
                <div class="mb-3">
                  <i class="fas fa-address-card icon"></i>
                  <label class="form-label icon">Address:</label>
                  <textarea class="form-control" name="address" required="required" placeholder="Enter Your Address"><?php echo $a['address'] ?></textarea>
                </div>
                <div class="mb-3">
                  <i class="fas fa-phone-square-alt icon"></i>
                  <label class="form-label icon">Phone:</label>
                  <input type="text" class="form-control" name="phone" required="required" value="<?php echo $a['phone'] ?>" placeholder="Enter Your Mobile Number">
                </div>
                <div class="mb-3">
                  <i class="fas fa-transgender icon"></i>
                  <label class="form-label icon">Gender:</label>
                  <input type="radio" name="gender" value="male" required="required"
                       <?php 

                         if ($a['gender']=='male') {
                           echo "checked";
                         }

                        ?>
                  ><b style="color: #fff; font-weight: 400;"> Male</b>
                  <input type="radio" name="gender" value="female" required="required"
                       <?php 

                         if ($a['gender']=='female') {
                           echo "checked";
                         }

                        ?>
                  ><b style="color: #fff; font-weight: 400;"> female</b>
                  <input type="radio" name="gender" value="other" required="required"
                       <?php 

                         if ($a['gender']=='other') {
                           echo "checked";
                         }

                        ?>
                  ><b style="color: #fff; font-weight: 400;"> other</b>
                </div>
                <div class="mb-3">
                  <i class="fas fa-images icon"></i>
                  <label class="form-label icon">Image:</label>
                  <input type="file" class="form-control" name="image"><br>
                  <img src="<?php echo $a['image'] ?>" style="width: 14%;height: 30px;">
                </div>
                <button type="submit" class="btn btn-success" value="submit" style="background-image: linear-gradient(to right,#295029,#1ed034);">Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html><br><br>

<?php 

include ('footer.php');

 ?>