<!DOCTYPE html>
<html>
<head>
	<title>Real Estate</title>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
    <style>
      a{
      
          transition: .3s ease-in-out;
      }

    </style>
    <li><a href="index.php" style="border-bottom: 1px solid tomato;">Home</a></li>
    <li><a href="sale.php" style="border-bottom: 1px solid tomato;">For Sale</a></li>
    <li><a href="rent.php" style="border-bottom: 1px solid tomato;">Rent</a></li>
    <li><a href="plot.php" style="border-bottom: 1px solid tomato;">Plots</a></li>
    <li><a href="projects.php" style="border-bottom: 1px solid tomato;" >Projects</a></li>
    <li><a href="contact.php" style="border-bottom: 1px solid tomato;">Contact Us</a></li>
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
<div class="container" style="width: 100%;">
  <h1 style="text-align: center;background-color: black;color: white;font-family: calibari;"><b>ALL COMPANIES</b></h1>
<div class="row">
<?php
$con=mysqli_connect('localhost','root','','real');
$query = "select *from company_login";

  $run= mysqli_query($con, $query); 
  
  while($row=mysqli_fetch_array($run)){
      
      $company_id    =$row['company_id'];
    $company_name  = $row['company_name'];
    $company_email = $row['company_email'];
    $company_phone = $row['phone_number'];
    $city          = $row['city'];
    $description   = $row['description'];
    $c_img         = $row ['c_img'];
    
    echo "   
            <div class='col-md-3' style='margin:0px;'>
          <div class='panel' style='box-shadow:5px 5px 5px 5px;'>
    <div class='panel-body' style='height:350px;'>
    <img src='company_images/$c_img' style='width:100%;height:100px;'>
      <div class='table'>
      <style>
      a{
           color:black;
           text-decoration:none;
      }
      a:hover{
        color:orange;
      }
      </style>
      <tr>
              <td><h4 style='text-align:center;'><b><a href='contact.php'>$company_name</a></h4></b></td>
      </tr>
        <tr>
      <pre><b>Email      $company_email</b></pre>
      </tr>
      <tr>
            <pre><b>Contact Number         $company_phone</b></pre>
      </tr>
      <tr>
            <pre><b>City/Town                $city</b></pre>
      </tr>
     <tr>
      <button class='btn btn-success' style='margin-left:35%;margin-top:3%;'>
<a href='details_company.php?detail=$company_id' style='text-decoration:none;'>Details</a></button>

  </tr>

      </div>
           </div>
           </div>
           </div>
        
  
              ";
}
?>
<?php
include("footer.php");

?>
</div>
</div>
</body>
</html>