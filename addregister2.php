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
   ?>
  <div class="container">
  <div class="row">
    <form method="POST" action="submitregister.php">
      <div class="col-xs-12 form-group"><label for="name">Name:</label><input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" ></div>
      <div class="col-xs-12 form-group"><label for="cno">Contact Number:</label><input class="form-control" id="cno" type="number" name="cno" placeholder="Enter Contact Number" ></div>
      <div class="col-xs-12 form-group"><label for="email">Email ID:</label><input class="form-control" id="email" type="email" name="email" placeholder="Enter Email ID" ></div>
      <div class="col-xs-12 form-group"><label for="add1">Address Line 1:</label><input class="form-control" id="add1" type="text" name="add1" placeholder="Enter Address Line 1" ></div>
      <div class="col-xs-12 form-group"><label for="add2">Address line 2:</label><input class="form-control" id="add2" type="text" name="add2" placeholder="Enter Address Line 2" ></div>
      <div class="col-xs-12 form-group"><label for="city">City:</label><input class="form-control" id="city" type="text" name="city" placeholder="Enter City" ></div>
      <div class="col-xs-12 form-group"><label for="clg">College:</label><input class="form-control" id="clg" type="text" name="clg" placeholder="Enter College" ></div>
      <div class="col-xs-12 form-group">
        <label for="sem">semester:
          <select name="sem" id="sem">
            <option>1st sem</option>
            <option>2nd sem</option>
            <option>3rd sem</option>
            <option>4th sem</option>
            <option>5th sem</option>
            <option>6th sem</option>
            <option>7th sem</option>
            <option>8th sem</option>
          </select>
        </label>
      </div>
      <div class="col-xs-12 form-group"><label for="course">Course:</label><input class="form-control" id="course" type="text" name="course" placeholder="Enter Degree Name" ></div>
      <div class="col-xs-12 form-group"><label for="branch">Branch:</label><input class="form-control" id="branch" type="text" name="branch" placeholder="Enter Branch Name" ></div>



      <select name="evtitle" class="invisible"><option><?php echo $evtitle?></option></select>
      <div class="col-xs-12 form-group"><center><button class="btn btn-default">Submit</button></center></div>
    </form>
  </div>
</div>
</body>
