<?php
session_start();

if(!isset($_SESSION['email'])){
  header('location:admin_login.php');
}

else {
?>
<!DOCTYPE html>
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
    <li><a href="admin.php">Home</a></li>
</ul>
</div>
</div>
</nav>

<br><br><br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="panel " style="border: 0px;box-shadow: 5px 5px 5px 5px;">
    <div class="panel-heading bg-primary">
      <h2 style="text-align: center;font-family: calibari;">Welcome to Admin Panel</h2>
      <h4 style="text-align: center;color:maroon;"><?php  echo $_SESSION['email']; ?></h4>

    </div>
    <div class="panel-body">
      <div class="row">
        <style >
          a:hover{
          color:orange;
          }
        </style>
        <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_property_admin.php" style="text-decoration: none;">VIEW ALL PROPERTY</a></h2>
  </div>
</div>

     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_property_admin.php?delete_property" style="text-decoration: none;">DELETE PROPERTY</a></h2>
        <?php
        


        ?>
  </div>
</div>

     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="admin_post.php" style="text-decoration: none;">INSERT PROPERTY</a></h2>
  </div>
</div>
     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_property_admin.php" style="text-decoration: none;">UPDATE PROPERTY</a></h2>
  </div>
</div>

     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="agent_signup_admin.php" style="text-decoration: none;">INSERT AGENT</a></h2>
  </div>
</div>
     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_agents_admin.php" style="text-decoration: none;">DELETE AGENT</a></h2>
  </div>
</div>
     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_agents_admin.php" style="text-decoration: none;">UPDATE AGENT</a></h2>
  </div>
</div>
 
   <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_agents_admin.php" style="text-decoration: none;">VIEW ALL AGENTS</a></h2>
  </div>
</div>
     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_company_admin.php" style="text-decoration: none;">VIEW ALL COMPANY</a></h2>
  </div>
</div>
     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_company_admin.php" style="text-decoration: none;">DELETE COMPANY</a></h2>

  </div>
</div>
     <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="all_company_admin.php" style="text-decoration: none;">UPDATE COMPANY</a></h2>
  </div>
</div>
  <div class="col-sm-3">
       <div class="panel" style="border: 0px;box-shadow: 5px 5px 5px 5px;background-color: black;height: 100px;width: 250px;">
        <h2 style="color:white;text-align: center;padding-top: 10%;font-family: sans-serif;" ><a href="company_signup_admin.php" style="text-decoration: none;">INSERT COMPANY</a></h2>
  </div>
</div>
  <div class="col-sm-3" style="margin-left: 35%;">
      
       <button class="btn btn-success btn-lg" style="width: 100%;"><a href="admin_logout.php" style="color:white;text-decoration: none;">Logout</a></button>
  </div>
</div>
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
<?php } ?>