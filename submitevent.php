<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Anurag Phadnis">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href=images/"icn.png"/>
  <link rel="stylesheet" href="style.css">
  <title>Event Management System</title>
</head>
<body>
  <?php
    $evtitle=$_POST['evtitle'];
    $evdesc=$_POST['description'];
    $regprice=$_POST['regprice'];
    $cashprize=$_POST['cashprize'];
    $evdate=$_POST["evdate"];
    $evdate=date('y-m-d',strtotime($evdate));
    $evtime=$_POST["evtime"];
    $adminid=$_POST['adminid'];
    include "dbinit.php";
    $qr="insert into events values('$evtitle','$evdesc','$regprice','$cashprize','$evdate','$evtime','$adminid')";
    $sqlqr=mysqli_query($con,$qr)or die(mysqli_error($con));
    echo "Upload success";
   ?>
</body>
