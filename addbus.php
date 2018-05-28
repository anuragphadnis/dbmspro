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
    <form method="POST" action="submitbus2.php">
      <div class="col-xs-12 form-group"><label for="busno">Enter Bus Number:</label><input required class="form-control" id="busno" type="number" name="busno" placeholder="Enter Bus Number"></div>
      <div class="col-xs-12 form-group"><label for="dname">Enter Driver Name:</label><input required class="form-control" id ="dname" type="text" name="dname" placeholder="Enter Driver Name"></div>
      <div class="col-xs-12 form-group"><label for="cno">Contact Number:</label><input class="form-control" id="cno" type="number" name="cno" placeholder="Enter Contact Number" min=1111111111 max=9999999999></div>
      <center><div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div></center>
    </form>
  </div>
</div>
</body>
