<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script>
   function initMap(){
    var location = {lat:31.582045, lng: 74.329376};
    var map = new google.maps.Map(document.getElementById("map"),{
      zoom:13,
      center: location
    });
     var marker = new google.maps.Marker({
          position: {lat:31.582045, lng: 74.329376},
          map: map
        });
     
   }	
</script>
<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCdjcHAu6iATyGojdY5RV07r5B0ZUWDfb8&callback=initMap'>
</script>>
</script>
 <style>
  #map{
  width: 100%;
  height: 500px;
}
 </style>
 </head>
<body style="background-color: gray;">

<?php
include("header1.php");
?>
		<div class="container">
			<div class="row">
				<h1 style="text-align: center;"><span>Contact Us</span></h1>
				<div class="col-md-4">
					<div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;height: 190px;width: 300px;background-color: black;">
						<div class="panel-body">
                  <center><span><i class="fa fa-map-marker fa-3x" style="color:blue;"></i></span>
                  	<h3 style="text-align: center; color:#2fdab8;">Address</h3>
                  	<p style="margin-top: 5%;color:white;font-family:sans-serif;font-size: 13px;">Gulberg 3, Lahore</p>
				</center>
			</div>
	     </div>
	 </div>

	 <div class="col-md-4">
					<div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;height: 190px;width: 300px;background-color: black;">
						<div class="panel-body">
                  <center><span><i class="fa fa-envelope fa-3x" style="color:blue;"></i></span>
                  	<h3 style="text-align: center; color:#2fdab8;">Email</h3>
                  	<p style="margin-top: 5%;color:white;font-family:sans-serif;font-size: 13px;"><a href="">tehreemaslam4@gmail.com</a></p>
				</center>
			</div>
	     </div>
	 </div>

	 <div class="col-md-4">
					<div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;height: 190px;width: 300px;background-color: black;">
						<div class="panel-body">
                  <center><span><i class="fa fa-phone fa-3x" style="color:blue;"></i></span>
                  	<h3 style="text-align: center; color:#2fdab8;">Call Us</h3>
                  	<p style="margin-top: 5%;color:white;font-family:sans-serif;font-size: 13px;">03074600446</p>
				</center>
			</div>
	     </div>
	 </div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel " style="border: 0px;">
				<div class="panel-heading">
				<h1 style="font-family:sans-serif;font-weight: bold;text-align: center;"><span>CONTACT</span> US </h1>
			    </div>
			    <div class="panel-body">
			    	<form method="post">
			    		<div class="table">
                        <tr>
                        	<td><label>Name</label></td>
                        	<td><input type="text" name="name" class="form-control"></td>
                        </tr>
                        <tr>
                        	<td><label>Email</label></td>
                        	<td><input type="text" name="email" class="form-control"></td>
                        </tr>
                        <tr>
                        	<td><label>Subject</label></td>
                        	<td><input type="text" name="subject" class="form-control"></td>
                        </tr>
                        <tr>
                        	<td><label>Message</label></td>
                        	<td><textarea class="form-control" name="text_area"></textarea></td>
                        </tr>
                        
                       
                        
			    		</div>
                        <input type="submit" name="submit" class="btn btn-success btn-lg" style="width: 100%;">
			    	</form>
			    </div>
			</div>
		</div>

          </div>
		</div>
<br>
<div class="container" style="width:100%;">
	<div id="map">
	</div>
	</div>
	<br>
<?php
include("footer.php");
?>
</body>
</html>