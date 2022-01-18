<?php
$con=mysqlii_connect('localhost','root','','real');

$view_detail= $_GET['detail'];
$query = "select *from property where property_id='$view_detail'";

  $run= mysqlii_query($con, $query); 
  
  while($row=mysqlii_fetch_array($run)){
      
      $property_id     = $row['property_id'];
      $property_title  = $row['property_title'];
      $email           = $row['property_email'];
      $city            = $row['city'];
      $address         = $row['address'];
      $date            = $row['date'];
      $rooms           = $row['rooms'];
      $bathroom        = $row['bathroom'];
      $area            = $row['area'];
      $category        = $row['property_category'];
      $person          = $row['property_person'];
      $max_price       = $row['max_price'];
      $min_price       = $row['min_price'];
      $img1            = $row['img1'];
      $img2            = $row['img2'];
      $img3            = $row['img3'];
      $img4            = $row['img4'];
      $description     = $row['property_description'];
      
      
    }
    ?>
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
<div class="container" style="width: 100%;">
	<h1 style="text-align: center;background-color: black;color: white;">PROPERTY DETAILS</h1>
<div class="row"> 
	<div class='col-md-12'>
		      <div class='panel' style='box-shadow:5px 5px 5px 5px;border:none;height: 720px;"'>
            <div class="panel-heading bg-primary">
              <h1 style="text-align: center;font-family: calibari;"><?php echo $property_title?></h1>
		    </div>
    <div class='panel-body' style='height:425px;'>
      <div class="row">
        <div class="col-md-6">
      <img src='uploads/<?php echo $img1?>' style='width:100%;height:300px;'>
        </div>
     <div class="col-md-6">
      <img src='uploads/<?php echo $img2?>' style='width:100%;height:300px;'>
        </div>
     </div>
       <div class="row">
        <div class="col-md-6">
      <img src='uploads/<?php echo $img3?>' style='width:100%;height:300px;'>
    </div>
     <div class="col-md-6">
      <img src='uploads/<?php echo $img4?>' style='width:100%;height:300px;'>
    </div>
     </div>
   </div>
 </div>
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-body">
        <style>
          h3{
            margin: 10px 10px 10px 10px;
            font-family: calibari;
            font-weight: bold;
             color:white;
          }
          p{
            color: white;
            text-align: justify;
            font-style: italic;
            font-size:15px;
          }
        </style>
        <table  style="background-color: black;width: 100%;">
          <tr><td><h3>CITY</h3></td>
            <td colspan="3"><h3><?php echo $city;?></h3></td>
          </tr>
          <tr><td><h3>ADDRESS</h3></td>
            <td colspan="3"><h3><?php echo $address;?></h3></td>
          </tr>
          <tr><td><h3>PRICE</h3></td>
            <td colspan="3"><h3><?php echo $max_price;?></h3></td>
          </tr>
          <tr><td><h3>SUBMITTED DATE</h3></td>
            <td colspan="3"><h3><?php echo $date;?></h3></td>
          </tr>
          <tr><td><h3>CATEGORY</h3></td>
            <td colspan="3"><h3><?php echo $category;?></h3></td>
          </tr>
             <tr><td><h3>SUBMITTED BY</h3></td>
            <td colspan="3"><h3><?php echo $person;?></h3></td>
          </tr>
          <tr><td><h3>AREA</h3></td>
            <td colspan="3"><h3><?php echo $area;?>Sq Feet</h3></td>
          </tr>
          <tr><td><h3>ROOMS</h3></td>
            <td colspan="3"><h3><?php echo $rooms;?></h3></td>
          </tr>
          <tr><td><h3>BATHROOMS</h3></td>
            <td colspan="3"><h3><?php echo $bathroom;?></h3></td>
          </tr>
          <tr><td><h3>EMAIL</h3></td>
            <td colspan="3"><h3><a href=""><?php echo $email;?></a></h3></td>
          </tr>
          <tr>

            <td><h3>DESCRIPTION</h3></td>
            <td><p><?php echo $description ?></p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
include("footer.php");

?>
</body>
</html>