<?php session_start(); ?>

<?php include ('header.php');?><br><br><br>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/ec3d80f38b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <style>
    body {
    background-image: url("img/r1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
      }

  </style>
</head>
<body>
<!-- login form start --><br>
<section>
  <div class="container"> 
    <div class="row">
      <div class="col-md-8 shadow inner" style="height: 500px;">
        <img src="img/r1.jpeg" style="width: 100%; height: 507px;border-bottom-left-radius: 20%; border-top-right-radius: 20%;">
        <div class="content">
          <h1 class="font">Where does it come from?</h1>
          <p class="font" style=" font-size: 20px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
        </div>
      </div><!-- col-md-8 end -->
         <div class="col-md-4 shadow p-3 mb-5" style="height: 500px;">
                  <div style="background: url(img/flower2.jpeg); background-repeat: no-repeat; background-size: cover;  border-bottom-right-radius: 20%; border-top-left-radius: 20%;margin-top: -15px; height: 500px;">
                  <center><img src="img/login.jpg" style="width: 120px; height: 120px; border-radius: 100%; margin-top: 20px;"></center>
                <h1 class="text-center font" style="color: #fff;">Login Form</h1>
                <!-- error massege start -->
                  <?php
                       
                    if (isset($_SESSION['error'])) {
                        echo '<div class="alert alert-dismissible fade show col-lg-11" role="alert" style= "color:#fff; padding: 0px 0px 0px 20px;">
                          '.$_SESSION['error'].'
                            </div>';
                    unset($_SESSION['error']);
                  }

                  ?>  
                  <!-- error massege start -->
                <!-- login form start -->
             <form method="post" action="login_insert.php" style="padding: 0px 20px 20px;">
                  <div class="mb-3">
                      <i class="far fa-envelope icon"></i>
                      <label class="form-label icon">Email:</label>
                      <input type="text" class="form-control" name="email" required="required" placeholder="Enter Email">
                  </div>

                  <div class="mb-3">
                       <i class="fas fa-lock icon"></i>
                       <label class="form-label icon">Password:</label>
                       <input type="password" class="form-control" name="password" required="required" placeholder="Enter Password">
                       <div  class="form-text" style="color: #fff;">We'll never share your password with anyone else.</div>
                  </div>

                 <button type="submit" class="btn btn-success" value="submit" style="background-image: linear-gradient(to right,#295029,#1ed034);">Login</button>
                 <a href="registration_form.php" class="btn btn-success" value="submit"style="background-image: linear-gradient(to right,#295029,#1ed034);">Create New Account</a>
             </form>
             <!-- login form end -->
      </div><!-- col-md-4 end -->
    </div><!-- row end -->
  </div><!-- container end -->
</section>
<!-- login form end --><br>
<?php include ('footer.php');?>
</body>
</html>