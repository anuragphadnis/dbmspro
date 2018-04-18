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
  $evtitle=$_POST['evtitle'];
  ?>
  <div class="container">
  <div class="row">
    <form method="POST" action=deletestudent2.php>
      <div class="form-group">
        <label for="adminid">Select UID of student:</label>
        <?php
          include "dbinit.php";
          $qu="select enrollmentno from students where evtitle='$evtitle'";
        ?>
        <select class="form-group" name="uid" id="uid">
          <?php
          $sqlqr=mysqli_query($con,$qu)or die("Some error occured while retriving data");
          while($row=mysqli_fetch_array($sqlqr))
          {
            echo "<option> $row[0] </option>";
          }
              mysqli_close($con);
          ?>
      </select></div>
      <input type="text" name='evtitle' value=<?php echo $evtitle ?> class="invisible">
      <center><div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div></center>
    </form>
  </div>
</div>
</body>
