<!DOCTYPE html>
<html>
<head>
	<title>Real Estate</title>
	   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<div class="container" style="margin-top: 1px;">
<div class="row">
<div class="col-sm-8">

            <h1 style="text-align: center;font-weight: bold;color:white;">Welcome</h1>
     
           <p style="text-overflow: none;text-align: justify;color:white;">Consider an online real estate guide which helps customer, dealers and agencies to buy and sell properties. Property is further divided into three categories that is homes, plots and commercial. A customer can search and view properties at any time according to his demand. It provides customer with a platform to look for real estate on basis of Cost, Area, City, number of Bedrooms, Plot Size, Type of Property, Price Range etc. Moreover, customer can only search by just giving the location.
           Consider an online real estate guide which helps customer, dealers and agencies to buy and sell properties. Property is further divided into three categories that is homes, plots and commercial. A customer can search and view properties at any time according to his demand. It provides customer with a platform to look for real estate on basis of Cost, Area, City, number of Bedrooms, Plot Size, Type of Property, Price Range etc. Moreover, customer can only search by just giving the location.</p>
           <button class="btn btn-success" style="float: right;"><a href="#" style="color:white;">Read more</a></button> 
           </div>
       
      <div class="col-md-4" style="background-color: white;">

     <div id="head" style="background-color: green;width: 300px;height: 50px;margin-left: 7%;">
            <h2 style="text-align: center;font-family: calibari;padding-top: 10px;color:white;">NEWS PANE</h2>
      		</div>
      <style>
    
      	a:hover{
      		color:orange;
      	}
      </style>
      			<marquee direction="up" scrolldelay="2" scrollamount="2">
 <a href=""><p>A new Scheme has been Started by the ABC Company!Click here</p></a>
 <a href=""><p>A new Scheme has been Started by the ABC Company</p></a>
 <a href=""><p>A new Scheme has been Started by the ABC Company</p></a>
 <a href=""><p>A new Scheme has been Started by the ABC Company</p></a>
 <a href=""><p>A new Scheme has been Started by the ABC Company</p></a>
      				
      			</marquee>
      		</div>
      	</div>
    </div>


<br>
<div class="container" style="width: 100%;">
	<h1 style="text-align: center;background-color: black;color: white;"></h1>
<div class="row">
<?php
$con=mysqli_connect('localhost','root','','real');
$query = "select *from property order by rand() LIMIT 12";

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
			<td><b><pre>Location            $city</pre></b></td>
			</tr>
		    <tr>

		    <tr>
			<td><b><pre>Category            $category</pre></b></td>
			</tr>
		    <tr>
    
<img src='img/icon/bed.png'>($rooms)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/shawer.png'>($bathroom)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/cars.png'>($area)
   
          </tr>
          

<button class='btn btn-success' style='margin-left:35%;margin-top:5%;'>
<a href='details.php?detail=$property_id' style='text-decoration:none;'>Details</a></button>
			


			</div>
           </div>
           </div>
           </div>
        
  
              ";
}
?>
</div>
<button class="btn btn-danger btn-lg" style="margin-left: 45%;"><a href='all_property.php' style="color:white;text-decoration: none;text-align: center;">View All</a></button>
</div>
<div class="container" style="width: 100%;">
	<h1 style="text-align: center;background-color: black;color: white;">Companies</h1>
<div class="row">
<?php
$con=mysqli_connect('localhost','root','','real');
$query = "select *from company_login order by rand() LIMIT 12";

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
			<button class='btn btn-success' style='margin-left:35%;margin-top:2%;'>
<a href='details_company.php?detail=$company_id' style='text-decoration:none;'>Details</a></button>
			</tr>


			</div>
           </div>
           </div>
           </div>
        
  
              ";
}
?>
</div>
<button class="btn btn-danger btn-lg" style="margin-left: 45%;"><a href='all_company.php' style="color:white;text-decoration: none;text-align: center;">View All</a></button>
</div>

<div class="container" style="width: 100%;">
	<h1 style="text-align: center;background-color: black;color: white;">Our Agents</h1>
<div class="row">
<?php
$con=mysqli_connect('localhost','root','','real');
$query = "select *from agent_login order by rand() LIMIT 12";

	$run= mysqli_query($con, $query); 
	
	while($row=mysqli_fetch_array($run)){
	    
	    $agent_id   =$row['agent_id'];
		$agent_name = $row['agent_name'];
		$agent_email = $row['agent_email'];
		$agent_phone = $row['agent_phone'];
		
		echo "   
		      <div class='col-md-2' style='margin-top:0px;'>
		      <div class='panel'>
		
    <div class='panel-body' style='height:160px;box-shadow:5px 5px 5px 5px ;'>
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
			<td><h4 style='text-align:center;'><a href=''>$agent_name</a></h4></td>
		
			
			<tr>
            <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$agent_phone</b></td>
			</tr>
			<br>
			<br>
			<tr>
			<td>
			<button class='btn btn-success' style='margin-left:25%;'>
			<a href='agent_details.php?detail=$agent_id' style='color:white;text-decoration:none;'>Details</a></button>
			</td>
			</tr>

			</div>
           </div>
           </div>
           </div>
        
  
              ";
}
?>
</div>
<button class="btn btn-danger btn-lg" style="margin-left: 45%;"><a href='all_agents.php' style="color:white;text-decoration: none;text-align: center;">View All</a></button>
</div>