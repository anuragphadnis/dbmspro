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
  <br>
  <div class="label">Events:
    <a href="addevent.php">
      <button class="btn btn-default" value="addevent" name="addevent">Add Event</button>
    </a>
    <a href="modifyevent.php">
      <button class="btn btn-default" value="addevent" name="addevent">Modify Event</button>
    </a>
    <a href="deleteevent.php">
      <button class="btn btn-default" value="addevent" name="addevent">Delete Event</button>
    </a>
    <a href="showevents.php">
      <button class="btn btn-default" value="addevent" name="addevent">Show Event</button>
    </a>
    <a href="assignstudents.php">
      <button class="btn btn-default" value="addevent" name="addevent">Assign Student Coordinators</button>
    </a>
    <a href="assignfaculty.php">
      <button class="btn btn-default" value="addevent" name="addevent">Add Faculty Coordinators</button>
    </a>
    <a href="assignlocation.php">
      <button class="btn btn-default" value="addevent" name="addevent">Add Location for Event</button>
    </a>
  </div>
  <br><br>
  <div class="label">Admin:
    <a href="addadmin.php">
      <button class="btn btn-default">Add Admin</button>
    </a>
    <a href="selectevent.php?form=modifyevent2.php">
      <button class="btn btn-default">Modify Admin</button>
    </a>
    <a href="deleteadmin.php">
      <button class="btn btn-default">Delete Admin</button>
    </a>
  </div>
  <br><br>
  <div class="label">Registration:
    <a href="register.php">
      <button class="btn btn-default">Register for events</button>
    </a>
    <a href="showreg.php">
      <button class="btn btn-default">Show Registered people</button>
    </a>
  </div>
  <br><br>
  <div class="label">Sponsorship:
    <a href="sponsoradd.php">
      <button class="btn btn-default">Add Sponsor Data</button>
    </a>
    <a href="sponsorreq.php">
      <button class="btn btn-default">Add Sponsor Requirments</button>
    </a>
    <a href="sponsorremove.php">
      <button class="btn btn-default">Remove sponsor data</button>
    </a>
    <a href="sponsorshow.php">
      <button class="btn btn-default">Show sponsor data</button>
    </a>
  </div>
  <br><br>
  <div class="label">Bus Routes:
    <a href="addbus.php">
      <button class="btn btn-default">Add Bus</button>
    </a>
    <a href="modifybus.php">
      <button class="btn btn-default">Modify Bus</button>
    </a>
    <a href="deletebus.php">
      <button class="btn btn-default">Delete Bus</button>
    </a>
    <a href="showbus.php">
      <button class="btn btn-default">Show Bus</button>
    </a>
  </div>
</body>
</html>
