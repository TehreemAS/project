<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Real Estate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body style="background-color: #ddd;">

    <!-- Fixed navbar -->
  <nav class="navbar  navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
  <div class="navbar-header">
    <a href="index.php" class="navbar-brand" style="color:white;">Real Estate</a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#faizan">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
<div class="collapse navbar-collapse" id="faizan">
  <ul class="nav navbar-nav" >
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="buy.php" style="color:white;">For Sale</a></li>
    <li><a href="rent.php" style="color:white;">Rent</a></li>
    <li><a href="plot.php" style="color:white;">Plots</a></li>
    <li><a href="projects.php" style="color:white;">Projects</a></li>
    <li><a href="contact.php" style="color:white;">Contact Us</a></li>
  </ul> 
</div>
</div>
</nav>
<br>
<br>
<div class="container" style="background-color: black; width: 100%;">
  <div class="row">
  <div class="col-sm-8">
   
        <h4 style="font-family: calibari;font-size: 40px;color:white;">Real Estate</h4>
        <i><p style="color:white;"></p></i>
  </div>
   
       <div class="col-sm-4" style="padding-top: 30px;">
            <a href="http://www.facebook.com" target="_blank"  style="color:white;"><i class="fa fa-facebook fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://www.twitter.com" target="_blank"  style="color:white;" ><i class="fa fa-twitter fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://www.google.com" target="_blank"  style="color:white;"><i class="fa fa-google fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="http://www.linkedin.com" target="_blank"  style="color:white;"><i class="fa fa-linkedin fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="http://www.pinterest.com" target="_blank"  style="color:white;"><i class="fa fa-pinterest fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
               <a href="http://www.instagram.com" target="_blank"  style="color:white;" ><i class="fa fa-instagram fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;


        
</div>
  </div>
</div>
</div>
<br>
<br>
<div class="container">
  <div class="col-sm-6 col-md-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 style="text-align: center;">Company Login</h1>
      </div>
      <div class="panel-body">
  <form method="post">
  <table class="table">
    <tr>
      <td>Company Email</td>
      <td><input type="email" name="email" required="required" class="form-control"></td>
    </tr>
    <tr>
      <td>Company Password</td>
      <td><input type="password" name="password" required="required" class="form-control"></td>
    </tr>
      <tr>
      <td colspan="3"><input type="submit" name="submit" class="btn btn-success btn-lg" value="Login" style="width: 100%;"></td>
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
<?php
$con = mysqli_connect('localhost','root','','real');
if(isset($_POST['submit'])){

$email  = $_POST['email'];
$password  = $_POST['password'];

$query = "select *from company_login where company_email='$email' AND company_password='$password'";

 $run = mysqli_query($con,$query);
 if(mysqli_num_rows($run)>0){
  $_SESSION['email']= $email;
  echo "<script>alert('Login is successful!')</script>";
    echo "<script>window.open('company_dash.php','_self')</script>";
}

else{
  echo "<script>alert('Email or Passord is Incorrect')</script>";
}


}

?>