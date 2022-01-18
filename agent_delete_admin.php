<?php
$con = mysqli_connect('localhost','root','','real');

$delete  = $_GET['delete'];

$query="delete from agent_login where agent_id='$delete'";
   
    $run =mysqli_query($con,$query);
    if($run){
      echo"<script>window.open('admin.php','_self')</script>";
    }



?>









?>