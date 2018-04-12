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
    <form method="POST" action="submitevent.php">
      <div class="col-xs-12 form-group"><label for="evtitle">Enter Event Title:</label><input required class="form-control" id="evtitle" type="text" name="evtitle" placeholder="Enter Event Title"></div>
      <div class="col-xs-12 form-group"><label for="description">Enter Event Description:</label><input required class="form-control" id ="description" type="text" name="description" placeholder="Enter Event Description"></div>
      <div class="col-xs-12 form-group"><label for="regprice">Enter Registration Price:</label><input required class="form-control" id = "regprice" type="number" name="regprice" placeholder="Enter Registration prize"></div>
      <div class="col-xs-12 form-group"><label for="cashprize">Enter Cash Prize:</label><input required class="form-control" id = "cashprize" type="number" name="cashprize" placeholder="Enter Cash Prize"></div>
      <div class="col-xs-12 form-group"><label for="evdate">Enter Event Date:</label><input required class="form-control" id = "evdate" type="date" name="evdate" placeholder="Enter Event Date"></div>
      <div class="col-xs-12 form-group"><label for="evtime">Enter Event Time:</label><input required class="form-control" id = "evtime" type="time" name="evtime" value="00:00" placeholder="Enter Event Time"></div>
      <label for="adminid">Select Admin which is adding event:</label>
      <select class="form-group" name="adminid" id="adminid">
      <?php
        include "dbinit.php";
        $qu="select adminid from admin where 1";
        $sqlqr=mysqli_query($con,$qu)or die("Some error occured while retriving data");
        while($row=mysqli_fetch_array($sqlqr))
        {
          echo "<option> $row[0] </option>";
        }
            mysqli_close($con);
      ?>
    </select>
      <center><div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div></center>
    </form>
  </div>
</div>
</body>
