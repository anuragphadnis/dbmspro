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
    $spname=$_POST['spname'];
   ?>
  <div class="container">
  <div class="row">
    <form method="POST" action="submitsponsorreq.php">
      <div class="col-xs-12 form-group"><label for="name"> Enter Requirment:</label><input class="form-control" id="name" type="text" name="spreq" placeholder="Enter Requirment (One at a time)" ></div>
      <select name="spname" class="invisible"><option><?php echo $spname?></option></select>
      <div class="col-xs-12 form-group"><center><button class="btn btn-default">Submit</button></center></div>
    </form>
  </div>
</div>
</body>
