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
  </head>
<body style="background-color: gray;">
  <?php
include("header1.php");

  ?>
<div class="container" style="width: 100%;">
	<h1 style="text-align: center;background-color: black;color: white;"></h1>
<div class="row">
<?php
$con=mysqli_connect('localhost','root','','real');
$query = "select *from property where property_category='sale' ";

	$run= mysqli_query($con, $query); 
	
	while($row=mysqli_fetch_array($run)){
	    
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


		
		echo "   
		        <div class='col-md-3'>
		      <div class='panel' style='box-shadow:5px 5px 5px 5px;'>
		   
    <div class='panel-body' style='height:425px;'>
      <img src='uploads/$img1' style='width:100%;height:100px;'>
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
			<td><h4 style='text-align:center;'><b><a href='contact.php'>$property_title</a></h4></b></td>
            <td><pre>Price                  $max_price</pre></td>
			</tr>
			<tr>
			<td><b><pre>By    $person</pre></b></td>
			</tr>
			<tr>
			<td><b><pre>Location           $city</pre></b></td>
			</tr>
			 <tr>
			<td><b><pre>Category               $category</pre></b></td>
			</tr>
		    <tr>
		    <tr>
             
<img src='img/icon/bed.png'>($rooms)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/shawer.png'>($bathroom)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/cars.png'>($area)
   
          </tr>
          <tr>
          <td>
			<input type='submit' name='details' value='Contact' class='btn btn-success' style='margin-left:35%;margin-top:5%;'>
			</td>
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
</body>
</html>