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
	<h1 style="text-align: center;background-color: black;color: white;"></h1>
<div class="row">
<?php
$con=mysqlii_connect('localhost','root','','real');
$query = "select *from property ";

	$run= mysqlii_query($con, $query); 
	
	while($row=mysqlii_fetch_array($run)){
	    
	    $property_id     = $row['property_id'];
	    $property_title  = $row['property_title'];
	    $img1            = $row['img1'];
		$category        = $row['property_category'];
		$city            = $row['city'];
		$max_price       = $row['max_price'];
		$description     = $row['property_description'];
		$address         = $row['address'];
		$person          = $row['property_person'];
		$area            = $row['area'];
		$rooms           = $row['rooms'];
    $bathroom        = $row['bathroom'];
        



?>  
		        <div class='col-md-3'>
		      <div class='panel' style='box-shadow:5px 5px 5px 5px;'>
		   
    <div class='panel-body' style='height:425px;'>
      <img src='uploads/<?php echo $img1; ?>' style='width:100%;height:100px;'>
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
			<td><h4 style='text-align:center;'><b><a href='contact.php'>
        <?php echo $property_title ?></a></h4></b></td>
            <td><pre>Price                  <?php echo $max_price; ?></pre></td>
			</tr>
			<tr>
			<td><b><pre>By    <?php echo $person?></pre></b></td>
			</tr>
			<tr>
			<td><b><pre>Location           <?php echo $city; ?></pre></b></td>
			</tr>
			 <tr>
			<td><b><pre>Category               <?php echo $category; ?></pre></b></td>
			</tr>
		    <tr>
		    <tr>
             
<img src='img/icon/bed.png'><?php echo"($rooms)"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/shawer.png'><?php echo"($bathroom)"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/cars.png'><?php echo "($area)"; ?>
   
          </tr>
          <tr>
          <td>
	<button class='btn btn-success' style='margin-top:5%;'>
    <a href="admin_delete_property.php?delete=<?php echo $property_id; ?>">Delete</a>
      </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class='btn btn-success' style='margin-top:5%;'><a href="edit_property_admin.php?edit_property=<?php echo $property_id; ?>">Edit</a>
      </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class='btn btn-success' style='margin-top:5%;'><a href='details_admin.php?detail=<?php echo $property_id; ?>'>Details</a>
      </button>
			</td>
</tr>

			</div>
           </div>
           </div>
           </div>
<?php } ?>

<?php
include("footer.php");

?>
</body>
</html>