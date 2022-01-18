
<?php
$con = mysqli_connect('localhost','root','','real');

$delete  = $_GET['delete'];

$query="delete from property where property_id='$delete'";
   
    $run =mysqli_query($con,$query);
    if($run){
      echo"<script>window.open('admin.php','_self')</script>";
    }



?>









?>