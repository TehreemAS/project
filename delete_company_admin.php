<?php
$con = mysqlii_connect('localhost','root','','real');

$delete  = $_GET['delete'];

$query="delete from company_login where company_id='$delete'";
   
    $run =mysqli_query($con,$query);
    if($run){
      echo"<script>window.open('admin.php','_self')</script>";
    }
?>
