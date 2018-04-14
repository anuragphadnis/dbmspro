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
  include "dbinit.php";
    $evtitle=$_POST['evtitle'];
    $qr="select * from locations where evtitle='$evtitle'";
    $sqlqr=mysqli_query($con,$qr) or die("Error while retriving data");
    $row=mysqli_fetch_assoc($sqlqr);
    ?>
      <div class='container'>
      <div class='row'>
        <form >
          <div class='col-xs-12 form-group'><label for='name'> Location Name:</label><input disabled class='form-control' id='name' type='text' name='name' placeholder='Enter Student Name' value=<?php
            echo $row['name'];
          ?> ></div>
        </form>
      </div>
    </div>
    <hr>
</body>
