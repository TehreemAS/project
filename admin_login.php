<?php

session_start();

?>
<!DOCTYPE html>
  <head>
    <title>Real Estate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
     <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="css/footer.css">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body style="background-color: #ddd;">
<?php
include("header1.php");

?>
<br>
<div class="container">
  <div class="col-sm-6 col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 style="text-align: center;">Admin Login</h1>
      </div>
      <div class="panel-body">
  <form method="post" action="">
  <table class="table">
    <tr>
      <td>Admin Email</td>
      <td><input type="email" name="email" required="required" class="form-control"></td>
    </tr>
    <tr>
      <td>Admin Password</td>
      <td><input type="password" name="password" required="required" class="form-control"></td>
    </tr>
      <tr>
      <td colspan="3"><input type="submit" name="submit" value="Login" class="btn btn-success btn-lg" style="width: 100%;"></td>
    </tr>
</table>
</form>
</div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>
<br>
<?php
$con = mysqli_connect('localhost','root','','real');
if(isset($_POST['submit'])){

$email  = $_POST['email'];
$password  = $_POST['password'];

$query = "select *from admin_login where admin_email='$email' AND admin_password='$password'";

$run = mysqli_query($con,$query);
 
 if(mysqli_num_rows($run)>0){

   $_SESSION['email']= $email;
   echo"<script>alert('Login is successfull')</script>";
  echo "<script>window.open('admin.php','_self')</script>";
   }

else{
  echo "<script>alert('Email or Passord is Incorrect')</script>";
}


}

?>