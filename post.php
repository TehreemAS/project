<!DOCTYPE html>
<html>
<head>
	<title>Post Property</title>
</head>
<body>
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
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;">
				<div class="panel-heading bg-primary">
					<h1 style="text-align: center;font-family: calibari;"><b>SUBMIT PROPERTY</b></h1>
				</div>
				<div class="panel-body">
					<form method="post" action="" enctype="multipart/form-data">
					 <div class="table">
						<tr>
						  <td><label>Title</label>
<input type="text" name="title" class="form-control" placeholder="Entre Name" required="required">
              </td>
						</tr>
             <tr>
						  <td><label>Email</label>
<input type="email" name="email" class="form-control" placeholder="Entre Email like 123@gmail.com" required="required">
              </td>
						</tr>
						<tr>
                <td><label>City</label>
<select name="city" class="form-control">
  <option>Lahore</option>
  <option>Karachi</option>
  <option>Islamabad</option>
  <option>Quetta</option>
  <option>Peshawar</option>
  <option>Multan</option>

</select>
              </td>
            </tr>
                    <tr>
                <td><label>Rooms</label>
<select name="room" class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>

</select>
              </td>
            </tr>
                             <tr>
                <td><label>Bathrooms</label>
<select name="bathroom" class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>

</select>
              </td>
            </tr>
      <tr>
            
  <td><label>Area</label></td>
<input type="text" name="area" class="form-control" placeholder="in sq feet">
              
            </tr>
            <tr>
						  <td><label>Address</label>
<input type="text" name="address" class="form-control" placeholder="Entre Address " required="required">
            </td>
						</tr>
            <tr>
							<td><label>Category</label></td>
                           <select name="category" class="form-control">
                           	<option>Plots</option>
                           	<option>Commercial</option>
                           	<option>Rent</option>
                           	<option>Sale</option>
                           	<option>Factories</option>
                           	<option>Banquet Halls</option>
                           	<option>Residential</option>
                           </select>
						</tr>
						<tr>
							<td><label>Agent/Company</label></td>
              <td><input type="text" name="person"  class="form-control"></td>
                  
						</tr>
						<tr>
							<td><label>Minimum Price</label></td>
							<td><select name="min_price" class="form-control" required="required">
<option>100K</option>
<option>150K</option>
<option>200K</option>
<option>250K</option>
<option>300K</option>
<option>350K</option>
<option>400K</option>
<option>450K</option>
<option>500K</option>
<option>550K</option>
<option>600K</option>
<option>650K</option>
<option>700K</option>
<option>750K</option>
<option>800K</option>
<option>850K</option>
<option>900K</option>
<option>950K</option>
<option>1000K</option>
</select></td>
</tr>

												<tr>
							<td><label>Maximum Price</label></td>
							<td><select name="max_price" class="form-control" required="required">
<option>100K</option>
<option>150K</option>
<option>200K</option>
<option>250K</option>
<option>300K</option>
<option>350K</option>
<option>400K</option>
<option>450K</option>
<option>500K</option>
<option>550K</option>
<option>600K</option>
<option>650K</option>
<option>700K</option>
<option>750K</option>
<option>800K</option>
<option>850K</option>
<option>900K</option>
<option>950K</option>
<option>1000K</option>
							</select></td>
						</tr>

					<tr>
				    <td>
                    <label>Image 1</label>
                    <input type="file" name="img1" >
                    </td>
                    <td>
             	    <label>Image 2</label>
                    <input type="file" name="img2" >
                    </td>
				    </tr>
				<tr>
						<td>
                      <label>Image 3</label>
                    <input type="file" name="img3">
                </td>
             <td><label>Image 4</label>
                    <input type="file" name="img4">
                </td>
				</tr>		
        <tr>
          <td><label>Description</label></td>
          <td><textarea class="form-control" cols="40" rows="3" name="description" placeholder="Please Say Something about 100-150 words"></textarea></td>
        </tr>
				<tr>
				<td><input type="submit" name="submit" class="btn btn-success btn-lg" style="width: 100%;"></td> 
				</tr>
					</div>
				</form>
			</div>
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
$con=mysqli_connect('localhost','root','','real');
if(isset($_POST['submit'])){

 $title        = $_POST['title'];
 $email        = $_POST['email'];
 $city         = $_POST['city'];
 $address      = $_POST['address'];
 $date         = date('Y-m-d');
 $room         = $_POST['room'];
 $bathroom     = $_POST['bathroom'];
 $area         = $_POST['area'];
 $category     = $_POST['category'];
 $person       = $_POST['person'];
 $min_price    = $_POST['min_price'];
 $max_price    = $_POST['max_price'];;
 $img1_name    = $_FILES['img1']['name'];
 $img1_tmp     = $_FILES['img1']['tmp_name'];
 $img2_name    = $_FILES['img2']['name'];
 $img2_tmp     = $_FILES['img2']['tmp_name'];
 $img3_name    = $_FILES['img3']['name'];
 $img3_tmp     = $_FILES['img3']['tmp_name'];
 $img4_name    = $_FILES['img4']['name'];
 $img4_tmp     = $_FILES['img4']['tmp_name'];
 $description  = $_POST['description'];
if($title=='' or $email=='' or $address=='' or $category=='' or $person=='' 
  or $min_price=='' or $max_price=='' or $description=='')
{
echo"<script>alert('Fields are empty')</script>";
exit();
}

  move_uploaded_file($img1_tmp,"uploads/$img1_name");
  move_uploaded_file($img2_tmp,"uploads/$img2_name");
  move_uploaded_file($img3_tmp,"uploads/$img3_name");
  move_uploaded_file($img4_tmp,"uploads/$img4_name");


   $query="insert into property(property_title,property_email,city,address,date,rooms,bathroom,area,
    property_category,property_person,min_price,max_price,img1,img2,img3,img4,property_description) values('$title','$email','$city','$address','$date',
    '$room','$bathroom','$area','$category','$person','$min_price',
    '$max_price','$img1_name','$img2_name','$img3_name','$img4_name','$description')";  
     
       $run = mysqli_query($con,$query);

       if($run){
        echo"<script>alert('Form has been Submitted')</script>";
        echo "<script>window.open('index.php','_self')</script>";
       }

       else{
        echo"<script>alert('Query is wrong')</script>";
       }

 }

?>