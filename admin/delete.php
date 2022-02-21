<?php
include('../include/config.php');
include('header/top.php'); 


 if(isset($_GET['id'])){
     $del_id = $_GET['id'];
 
     $del_query = "DELETE FROM anp WHERE id = '$del_id'";
     $del_run = mysqli_query($db_conn,$del_query);
     if ($del_run) {
        echo "<script>alert('You have Deleted Successfully')</script>";
        echo "<script>window.open('desboard.php', '_self')</script>";
     }
 }

// extract($_GET);
// $query = "DELETE FROM anp WHERE id= '$class->id'";
// mysqli_query($db_conn,$query);
// header('location:desboard.php');
 
?>


