<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<a href="" class="btn btn-success" value="submit" data-toggle="modal" data-target="#aa" style="background: -webkit-linear-gradient(left, #7579ff ,#b224ef);">Create New Account</a>
<div class="modal fade" id="aa">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registration  Form</h5>
          <button type="button" class="" data-dismiss="modal">
             <span >&times;</span>
          </button>        
      </div><!-- modal-header -->
      <div class="modal-body">
        <h1 class="text-center" style="font-family: 'Lobster', cursive;">Registration Form</h1>
        <form class="card-body bg-light" method="post" action="user_insert.php">

         <div class="mb-3">
           <label class="form-label">Name:</label>
           <input type="text" class="form-control" name="name" required="required">
         </div>

         <div class="mb-3">
           <label class="form-label">Email:</label>
           <input type="text" class="form-control" name="email" required="required">
         </div>

         <div class="mb-3">
           <label class="form-label">Password:</label>
           <input type="password" class="form-control" name="password" required="required">
           <div  class="form-text">We'll never share your password with anyone else.</div>
         </div>
         <button type="submit" class="btn btn-success" value="submit" style="background: -webkit-linear-gradient(left, #7579ff ,#b224ef);">Submit</button>
        </form>
      </div><!-- body end -->
    </div><!-- modal content -->
  </div><!-- modal dialog -->
</div><!-- modal fade -->
</body>
</html>