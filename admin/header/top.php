<?php
@session_start();
if(!isset($_SESSION['login']))
{
  header('Location:index.php');
exit;
} 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/" rel="icon" type="images/jpg" />
    

    <title>Hello, world!</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
     <!--Font Awesome css-->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <link href="plugins/datatable/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <style>
        body{
            font-family: 'Raleway', sans-serif;
        }
        </style>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="plugins/table2excel.js"></script>
        <script src="plugins/datatable/datatables.min.js"></script>
  </head>
  <body>
  