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
    $qu="select * from events where title='$evtitle'";
    $sqlqr=mysqli_query($con,$qu);
    $row=mysqli_fetch_array($sqlqr);
    $evdesc=$row[1];
    $regprice=$row[2];
    $cashprize=$row[3];
    $evdate=$row[4];
    $evtime=$row[5];
    $adminid=$row[6];
   ?>
  <div class="container">
  <div class="row">
    <form method="POST" action="submiteventchange.php">
      <div class="col-xs-12 form-group"><label for="evtitle2">Enter Event Title:</label><input disabled class="form-control" id="evtitle2" type="text" name="evtitle2" placeholder="Enter Event Title" value=<?php echo $evtitle?>></div>
      <div class="col-xs-12 form-group"><label for="description">Enter Event Description:</label><input required class="form-control" id ="description" type="text" name="description" placeholder="Enter Event Description" value=<?php echo $evdesc?>></div>
      <div class="col-xs-12 form-group"><label for="regprice">Enter Registration Price:</label><input required class="form-control" id = "regprice" type="number" name="regprice" placeholder="Enter Registration prize" value=<?php echo $regprice?>></div>
      <div class="col-xs-12 form-group"><label for="cashprize">Enter Cash Prize:</label><input required class="form-control" id = "cashprize" type="number" name="cashprize" placeholder="Enter Cash Prize" value=<?php echo $cashprize?>></div>
      <div class="col-xs-12 form-group"><label for="evdate">Enter Event Date:</label><input required class="form-control" id = "evdate" type="date" name="evdate" placeholder="Enter Event Date" value=<?php echo $evdate?>></div>
      <div class="col-xs-12 form-group"><label for="evtime">Enter Event Time:</label><input required class="form-control" id = "evtime" type="time" name="evtime" value="00:00" placeholder="Enter Event Time" value=<?php echo $evtime?>></div>
      <label for="adminid">Select Admin which is adding event:</label>
      <select class="form-group" name="adminid" id="adminid">
      <?php
        $qu="select adminid from admin where 1";
        $sqlqr=mysqli_query($con,$qu)or die("Some error occured while retriving data");
        while($row=mysqli_fetch_array($sqlqr))
        {
          echo "<option> $row[0] </option>";
        }
            mysqli_close($con);
      ?>
    </select>
    <div class="col-xs-12 form-group"><input class="form-control invisible" id="evtitle" type="text" name="evtitle" placeholder="Enter Event Title"></div>

      <center><div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div></center>
    </form>
  </div>
</div>
</body>
