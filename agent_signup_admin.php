<!DOCTYPE html>
<html>
<head>
	<title>Agent Registeration</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
     <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="css/footer.css">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
<div class="container">
	<div class="col-sm-8 col-md-8 col-md-offset-2">
		<div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;">
			<div class="panel-heading bg-primary">
		<h4 style="text-align: center;font-size:40px;">Agent Sign Up</h4>
			</div>
			<i><p style="font-size: 30px;font-family: calibari;text-align: center;">Please fill the details to start using site options</p></i>
			<div class="panel-body">
				<form method="post">
					<table class="table">
						<tr>
						<td><h4>Name</h4></td>
						<td><input type="text" name="name"
						 class="form-control" placeholder="Entre Your Full Name" required="required"></td>
					</tr>
                    	<tr>
						<td><h4>Email</h4></td>
						<td><input type="email" name="email"
						 class="form-control" placeholder="Entre Your Email" required="required"></td>
						    
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
						 class="form-control" placeholder="03074600446" required="required"></td>
					</tr>
					<tr>
      <td colspan="3"><input type="submit" name="submit" class="btn btn-primary btn-lg" value="Register" style="width: 100%;"></td>
  </tr>
					</table>

				</form>>
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

   $name  =$_POST['name'];
   $email =$_POST['email'];
   $password =$_POST['password'];
   $phone =$_POST['phone'];

$query = "insert into agent_login(agent_name,agent_email,agent_password,agent_phone)
 values('$name','$email','$password','$phone')";

   $run = mysqli_query($con,$query);
  
  if($run){
 echo "<script>alert('Your form has been Submitted Successfully')</script>";
  echo "<script>window.open('admin.php','_self')</script>";
  }

 else{
 	echo "<script>alert('You have entered incorrect details');</script>";

  }
}
?>