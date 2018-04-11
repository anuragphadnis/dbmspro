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
    <form method="POST" action="submitadmin.php">
      <div class="col-xs-12 form-group"><label for="adminid">Enter User Name:</label><input required class="form-control" id="adminid" type="text" name="adminid" placeholder="Enter username"></div>
      <div class="col-xs-12 form-group"><label for="fname">Enter first Name:</label><input required class="form-control" id ="fname" type="text" name="fname" placeholder="Enter First Name"></div>
      <div class="col-xs-12 form-group"><label for="lname">Enter Last Name:</label><input required class="form-control" id = "lname" type="text" name="lname" placeholder="Enter Last Name"></div>
      <div class="col-xs-12 form-group"><label for="lname">Enter Password:</label><input required class="form-control" id = "pwd" type="password" name="pwd" placeholder="Enter Password"></div>
      <center><div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div></center>
    </form>
  </div>
</div>
</body>
