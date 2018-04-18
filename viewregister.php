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
    $qr="select * from regpeople where evtitle='$evtitle'";
    $sqlqr=mysqli_query($con,$qr) or die("Error while retriving data");
   ?>
  <div class="container">
  <div class="row">
    <?php
    while($row=mysqli_fetch_array($sqlqr))
    {
      echo"
      <div class='col-xs-12 form-group'><label for='name'>Name:</label><input disabled class='form-control' id='name' type='text' name='name' placeholder='Enter Name' value=$row[name]></div>
      <div class='col-xs-12 form-group'><label for='cno'>Contact Number:</label><input disabled class='form-control' id='cno' type='number' name='cno' placeholder='Enter Contact Number'value=$row[cno] ></div>
      <div class='col-xs-12 form-group'><label for='email'>Email ID:</label><input disabled class='form-control' id='email' type='email' name='email' placeholder='Enter Email ID' value=$row[email]></div>
      <div class='col-xs-12 form-group'><label for='add1'>Address Line 1:</label><input disabled class='form-control' id='add1' type='text' name='add1' placeholder='Enter Address Line 1' value=$row[address1]></div>
      <div class='col-xs-12 form-group'><label for='add2'>Address line 2:</label><input disabled class='form-control' id='add2' type='text' name='add2' placeholder='Enter Address Line 2' value=$row[address2]></div>
      <div class='col-xs-12 form-group'><label for='city'>City:</label><input class='form-control' disabled id='city' type='text' name='city' placeholder='Enter City' value=$row[city]></div>
      <div class='col-xs-12 form-group'><label for='clg'>College:</label><input class='form-control' disabled id='clg' type='text' name='clg' placeholder='Enter College' value=$row[college]></div>
      <div class='col-xs-12 form-group'><label for='clg'>Semester:</label><input class='form-control'disabled id='sem' type='text' name='sem' placeholder='Enter College' value=$row[semester]></div>
      <div class='col-xs-12 form-group'><label for='course'>Course:</label><input class='form-control' disabled id='course' type='text' name='course' placeholder='Enter Degree Name' value=$row[course]></div>
      <div class='col-xs-12 form-group'><label for='branch'>Branch:</label><input class='form-control' disabled id='branch' type='text' name='branch' placeholder='Enter Branch Name' value=$row[branch]></div>
      <hr>
      ";
    }
      ?>
  </div>
</div>
</body>
