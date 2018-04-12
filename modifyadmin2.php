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
    $adminid=$_POST['adminid'];
    $qu="select * from admin where adminid='$adminid'";
    include "dbinit.php";
    $sqlqr=mysqli_query($con,$qu) or die(mysqli_error($con));
    $row=mysqli_fetch_array($sqlqr);
    $username=$adminid;
    $fname=$row[1];
    $lname=$row[2];
    $pwd=$row[3];
    mysqli_close($con);
   ?>
  <div class="container">
  <div class="row">
    <form method="POST" action="submitadminchange.php">
      <div class="col-xs-12 form-group"><label for="adminid">User Name:</label><input disabled required class="form-control" id="adminid" type="text" value="<?php echo"$username"?>" name="adminid2" placeholder="Enter username"></div>
      <div class="col-xs-12 form-group"><label for="fname">Enter first Name:</label><input required class="form-control" id ="fname" type="text" value="<?php echo"$fname"?>" name="fname" placeholder="Enter First Name"></div>
      <div class="col-xs-12 form-group"><label for="lname">Enter Last Name:</label><input required class="form-control" id = "lname" type="text" value="<?php echo"$lname"?>" name="lname" placeholder="Enter Last Name"></div>
      <div class="col-xs-12 form-group"><label for="lname">Enter Password:</label><input required class="form-control" id = "pwd" type="password" value="<?php echo"$pwd"?>"  name="pwd" placeholder="Enter Password"></div>
      <center><div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div></center>
      <div class="col-xs-12 form-group"><input required class="form-control invisible" id="adminid2" type="text" value="<?php echo"$username"?>" name="adminid" placeholder="Enter username"></div>

    </form>
  </div>
</div>
</body>
