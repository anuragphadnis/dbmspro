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
  <div class="container">
  <div class="row">
    <?php
    include 'dbinit.php';
    $busno=$_POST['busno'];
    ?>
    <form method="POST" action="submitbus.php">
      <div class="col-xs-12 form-group"><label for="busno">Enter Stop Name:</label><input required class="form-control" id="stop" type="text" name="stop" placeholder="Enter Bus stop"></div>
      <div class="col-xs-12 form-group"><label for="dname">Enter Arrival Time:</label><input required class="form-control" id ="atime" type="time" name="atime" placeholder="Enter Arrival Time" value="00:00"></div>
      <div class="col-xs-12 form-group"><label for="cno">Enter Return Time:</label><input class="form-control" id="dtime" type="time" name="dtime" placeholder="Enter Departure time" value="00:00"></div>
      <input type="number" value=<?php echo $busno?> class="invisible" name="busno">
      <center><div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div></center>
    </form>
  </div>
</div>
</body>
