<!DOCTYPE html>
  <head>
    <title>Real Estate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>

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
    <li><a href="index.php">Home</a></li>
    <li><a href="sale.php">For Sale</a></li>
    <li><a href="rent.php">Rent</a></li>
    <li><a href="plot.php">Plots</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="admin_login.php">Admin Login</a></li>

<li  class="dropdown">
<a  class="dropdown-toggle" data-toggle="dropdown">Login
  <span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="agent_login.php" onMouseOver="this.style.color='#0F0'">Agent Login</a></li>
  <li><a href="company_login.php"   onMouseOver="this.style.color='#0F0'">Company Login</a></li>
</ul> 
</li>
 
 <li class="dropdown">
<a  class="dropdown-toggle" data-toggle="dropdown">Sign Up
<span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="agent_signup.php" onMouseOver="this.style.color='#0F0'">As Agent</a></li>
  <li><a href="company_signup.php"    onMouseOver="this.style.color='#0F0'">As Company</a></li>
</ul> 
</li>
<li><a href="post.php">Post Property</a>
</li>
</ul>
<form method="get" action="index.php">
  <li><input type="text" name="srch" placeholder="Search  Property by Name"
   style=" border-radius: 5px;margin-top:7px;height: 35px" size="30" >
<input type="submit" name="search" value="Search" class="btn btn-danger">
  </li>
</form>
</div>
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
        <style>
          
        </style>
            <a href="http://www.facebook.com" target="_blank" style="color:white;"><i class="fa fa-facebook fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://www.twitter.com" target="_blank"  style="color:white;" ><i class="fa fa-twitter fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://www.google.com" target="_blank"  style="color:white;"><i class="fa fa-google fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="http://www.linkedin.com" target="_blank"  style="color:white;"><i class="fa fa-linkedin fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="http://www.pinterest.com" target="_blank"  style="color:white;"><i class="fa fa-pinterest fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
               <a href="http://www.instagram.com" target="_blank"  style="color:white;" ><i class="fa fa-instagram fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;


        
</div>
  </div>
</div>
</div>

  <!--Carosal elements Starts-->
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/front/f1.jpg" alt="Los Angeles" style="width:100%;height: 500px;">
        <div class="carousel-caption">
          <h3>Lahore</h3>
          <p>Lahore is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/front/f2.jpg" alt="Chicago" style="width:100%;height: 500px;">
        <div class="carousel-caption">
          <h3>Karachi</h3>
          <p>Thank you, Karachi!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/front/f3.jpg" alt="New York" style="width:100%;height: 500px;">
        <div class="carousel-caption">
          <h3>Islamabad</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<div class="container">

<?php
$con=mysqli_connect('localhost','root','','real');
if(isset($_GET['search'])){

  $search = $_GET['srch'];

  $query     ="select *from property";

     $run = mysqli_query($con,$query);
     


     while($row=mysqli_fetch_array($run)){
    $property_id     = $row['property_id'];
    $title           = $row['property_title'];
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

}
  
?>          
<div class="container">
       <h1 style="background-color: #DEDEDE;text-align: center;">Search Results</h1>
  <div class="row"> 

     
            <div class='col-md-3'>
          <div class='panel' style='box-shadow:5px 5px 5px 5px;'>
       
    <div class='panel-body' style='height:425px;'>
  <img src="uploads/<?php echo $img1; ?> " style='width:100%;height:100px;'>
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
      <td><h4 style='text-align:center;'><b><a href='contact.php'><?php
      echo $title;?>
        </a></b></h4></td>
          </tr>
          <tr>
            <td><pre>Price                  <?php echo $max_price; ?></pre></td>
      </tr>
      <tr>
      <td><b><pre>By <?php echo $person;?></pre></b></td>
      </tr>
      <tr>
      <td><b><pre>Location             <?php echo $city;?></pre></b></td>
      </tr>
        <tr>
      <td><b><pre>Category             <?php echo $category;?></pre></b></td>
      </tr>
        <tr>
    
<img src='img/icon/bed.png'><?php echo "($rooms)";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/shawer.png'><?php  echo "($bathroom)"; ?>&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/icon/cars.png'><?php echo "($area)"; ?>
   
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
             
<?php     }  ?>

</div>
</div>
</div>
</body>
