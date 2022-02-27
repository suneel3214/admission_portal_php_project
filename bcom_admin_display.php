<?php include('session.php'); ?>
<?php include ('header1.php');?>

<br><br><br>
              <?php          
                include('db_con.php');
         
                $email = $_SESSION['e'];
                $data = "select * from bcom where email = '$email'";
                $result = mysqli_query($con,$data);
                $a = mysqli_fetch_array($result);
             ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>B.com View</title>
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
<div class="container">
    <div class="row">
        <h1 class="text-center icon">Student View Record<hr></h1>
        <div class="col-md-4">
             <img src="<?php echo $a['image'] ?>" style="width: 100%;height: 320px;">
        </div>
        <div class="col-md-8">
            <table class="table table-bordered  table-hover shadow" style="background: url(img/flower2.jpeg); background-repeat: no-repeat; background-size: cover; color: #fff;">
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
                  <th>CITY:</th>
                  <td><?php echo $a['city'] ?></td>
              </tr>
              <tr>
                  <th>ADDRESS:</th>
                  <td><?php echo $a['address'] ?></td>
              </tr>
              <tr>
                  <th>PHONE:</th>
                  <td><?php echo $a['phone'] ?></td>
              </tr>
              <tr>
                  <th>GENDER:</th>
                  <td><?php echo $a['gender'] ?></td>
              </tr>
           </table>
           <a href="bcom_edit.php?e=<?php echo $a['id'] ?>" class="btn btn-light" style="background-image: linear-gradient(to right,#295029,#1ed034); width: 100%; color: white;">Edit</a> 
        </div>
    </div>
</div>
</body>
</html>

<br><br>
 <?php 

include ('footer.php');

 ?>