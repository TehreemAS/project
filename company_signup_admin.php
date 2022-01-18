<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Real Estate</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
     <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  </head>

  <body style="background-color: gray;">

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
    <li><a href="admin.php">Home</a></li>

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
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel" style="border:0px;box-shadow: 5px 5px 5px 5px;">
        <div class="panel-heading bg-primary">
          <h1 style="text-align: center;font-family: calibari;">Company Registeration</h1>
        </div>
        <div class="panel-body">
          <form method="post" action="" enctype="multipart/form-data">
           <div class="table">
            <tr>
            <td><h4>Company Name</h4></td>
    <td>
      <input type="text" name="name" class="form-control" placeholder="ABC company" required="required">
    </td>
          </tr>
             <tr>
            <td><h4>Email</h4></td>
            <td><input type="email" name="email"
             class="form-control" placeholder="123@gmail.com" required="required"></td>
          </tr>
              <tr>
            <td><h4>Password</h4></td>
            <td><input type="password" name="password"
             class="form-control" placeholder="Entre Password" required="required">
            </td>
            </tr>
 
              <tr>
            <td><h4>Phone Number</h4></td>
            <td><input type="text" name="phone"
             class="form-control" placeholder="03211234567" required="required">
            </td>
           </tr>
            <tr>
              <td><h4>Company Logo</h4></td>
             <td><input type="file" name="img1"></td>
           </tr>
           <tr>
          <td><h4>Select City/Town</h4></td>
            <td><select name="city" class="form-control">
              <option>Lahore</option>
              <option>Karachi</option>
              <option>Islamabad</option>
              <option>Multan</option>
              <option>Faisalabad</option>
              <option>Gujranwala</option>


            </select>
            </td>
          </tr>
          <tr>
           <td><h4>Description</h4></td>
            <td><textarea cols="40" rows="6" class="form-control" name="description" placeholder="Only 50 Characters"></textarea></td>
          </tr>
          <tr>
      <td colspan="3"><input type="submit" name="submit" class="btn btn-primary btn-lg" value="Register" style="width: 100%;"></td>
           </tr>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<?php
include("footer.php");
?>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','real');
if(isset($_POST['submit'])){ 

  $name         =$_POST['name'];
  $email        =$_POST['email'];
  $password     =$_POST['password'];
  $phone        =$_POST['phone'];
  $city         =$_POST['city'];
  $description  =$_POST['description'];
  $img1         =$_FILES['img1']['name'];
  if(isset($_FILES['img1']['name']))
  {
    echo"set";
  }
  else{
    echo"not set";
  }
  $img1_tmp      =$_FILES['img1']['tmp_name'];
   
   

   $result = move_uploaded_file($img1_tmp,"company_images/$img1");
  if(!$result){
  die("image not uploaded".mysqli_error());
  }
  else{
    echo"success";
  }

$query = "insert into company_login(company_name,company_email,company_password,c_img,phone_number,city,description)
 values('$name','$email','$password','$img1','$phone','$city','$description')";

   

   $run = mysqli_query($con,$query);
  
  if($run){
 echo "<script>alert('Your form has been Submitted Successfully')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }

 else{
  echo "<script>alert('You have entered incorrect details')</script>";
 exit();
  }
}
?>