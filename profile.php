<?php include('session.php'); ?>
<?php include ('header1.php');?>
<br><br><br>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>B.tech View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  body {
    background-image: url("img/r1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
      }

  .icon{
    color: #fff;
    font-family: 'Lobster', cursive;
      }
  .table-hover tr:hover td{
   color: yellow;
    }
    .table-hover tr:hover th{
   color: yellow;
    }

</style>
<body>
<div class="container" style="padding-top: 65px; padding-bottom: 40px;">
    <div class="row">
        <h1 class="text-center icon">Student Profile<hr></h1>
        <div class="col-md-4">
             <img src="img/ra1.png" style="width: 100%;height: 153px;"> 
        </div>
        <div class="col-md-8">
            <table class="table table-bordered  table-hover shadow" style="background: url(img/flower2.jpeg); background-repeat: no-repeat; background-size: cover; color: #fff;">
              <?php 

                include ('db_con.php');
                $email = $_SESSION['e'];
                $data = "select * from user where email = '$email'";
                $result = mysqli_query($con,$data);
                // echo "<pre>";
                // print_r($result);
                // die;
                $a = mysqli_fetch_array($result);


               ?>
              <tr>
                  <th>ID:</th>
                  <td><?php echo $a['id'] ?></td>
              </tr>
              <tr>
                  <th>NAME:</th>
                  <td><?php echo $a['name'] ?></td>
              </tr>
              <tr>
                  <th>EMAIL:</th>
                  <td><?php echo $a['email'] ?></td>
              </tr>
              <tr>
                  <th>PASSWORD:</th>
                  <td><?php echo $a['password'] ?>
                    <a href="profile_edit.php?e=<?php echo $a['id']; ?>" class="btn btn-light" value="submit" data-toggle="modal" data-target="#aa" style="background-image: linear-gradient(to right,#295029,#1ed034); color: #fff;">Change Password</a>
                  </td>
              </tr>             
          </table> 
        </div>       
    </div>
</div>
<!-- modal start -->
<section>
  <div class="modal fade" id="aa">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header" style="background-image: linear-gradient(to right,#295029,#1ed034);">
        <h5 class="modal-title text-light">Password change</h5>
          <button type="button" class="" data-dismiss="modal">
             <span style="background: none">&times;</span>
          </button>        
      </div><!-- modal-header -->
      <div class="modal-body" style="background: url(img/flower2.jpeg); background-repeat: no-repeat; background-size: cover;">
        <h1 class="text-center text-light" style="font-family: 'Lobster', cursive;">Password</h1>
        <form class="card-body" method="post" action="user_insert.php">

         <div class="mb-3">
           <label class="form-label text-light">Password:</label>
           <input type="text" class="form-control" name="name" required="required" placeholder="Change Password">
         </div>

         <button type="submit" class="btn btn-success" value="submit" style="background-image: linear-gradient(to right,#295029,#1ed034);">Change</button>
        </form>
      </div><!-- body end -->
    </div><!-- modal content -->
  </div><!-- modal dialog -->
</div><!-- modal fade -->
</section>
<br><br>
 <?php include ('footer.php'); ?>
</body>
</html>
