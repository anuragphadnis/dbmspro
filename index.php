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
      <button class="btn btn-default">Add Event</button>
    </a>
    <a href="selectevent.php?form=modifyevent2.php">
      <button class="btn btn-default">Modify Event</button>
    </a>
    <a href="selectevent.php?form=deleteevent2.php">
      <button class="btn btn-default">Delete Event</button>
    </a>
    <a href="selectevent.php?form=showevents2.php">
      <button class="btn btn-default">Show Event</button>
    </a>
  </div>
  <br><br>
  <div class="label">Student Coordinators:
    <a href="selectevent.php?form=assignstudents2.php">
      <button class="btn btn-default">Assign Student Coordinators</button>
    </a>
    <a href="selectevent.php?form=viewstudents2.php">
      <button class="btn btn-default">View Student Coordinators</button>
    </a>
    <a href="selectevent.php?form=deletestudent.php">
      <button class="btn btn-default">Delete Student Coordinators</button>
    </a>
  </div>
  <br><br>
  <div class="label">Faculty Coordinators
    <a href="selectevent.php?form=assignfaculty2.php">
      <button class="btn btn-default">Add Faculty Coordinators</button>
    </a>
    <a href="selectevent.php?form=viewfaculty2.php">
      <button class="btn btn-default">View Faculty Coordinators</button>
    </a>
    <a href="selectevent.php?form=deletefaculty.php">
      <button class="btn btn-default">Delete Faculty Coordinators</button>
    </a>
  </div>
  <br><br>
  <div class="label">Location for Events:
    <a href="selectevent.php?form=assignlocation2.php">
      <button class="btn btn-default">Add Location for Event</button>
    </a>
    <a href="selectevent.php?form=viewlocation2.php">
      <button class="btn btn-default">View Location for Event</button>
    </a>
    <a href="selectevent.php?form=deletelocation.php">
      <button class="btn btn-default">Delete Location for Event</button>
    </a>
  </div>
  <br><br>
  <div class="label">Event Requirements:
    <a href="selectevent.php?form=addreq.php">
      <button class="btn btn-default">Add Event Requirements</button>
    </a>
    <a href="selectevent.php?form=showreq.php">
      <button class="btn btn-default">Show Event Requirements</button>
    </a>
  </div>
  <br><br>
  <div class="label">Admin:
    <a href="addadmin.php">
      <button class="btn btn-default">Add Admin</button>
    </a>
    <a href="selectadmin.php?form=modifyadmin2.php">
      <button class="btn btn-default">Modify Admin</button>
    </a>
    <a href="selectadmin.php?form=deleteadmin2.php">
      <button class="btn btn-default">Delete Admin</button>
    </a>
  </div>
  <br><br>
  <div class="label">Registration:
    <a href="selectevent.php?form=addregister2.php">
      <button class="btn btn-default">Register for events</button>
    </a>
    <a href="selectevent.php?form=viewregister.php">
      <button class="btn btn-default">Show Registered people</button>
    </a>
  </div>
  <br><br>
  <div class="label">Sponsorship:
    <a href="selectevent.php?form=addsponsor.php">
      <button class="btn btn-default">Add Sponsor Data</button>
    </a>
    <a href="selectsponsor.php?name=addsponsorreq.php">
      <button class="btn btn-default">Add Sponsor Requirments</button>
    </a>
    <a href="selectevent.php?form=showsponsordata.php">
      <button class="btn btn-default">Show sponsor data</button>
    </a>
    <a href="selectsponsor.php?name=showsponsorreq.php">
      <button class="btn btn-default">Show sponsor Requirments</button>
    </a>
  </div>
  <br><br>
  <div class="label">Bus Routes:
    <a href="addbus.php">
      <button class="btn btn-default">Add Bus</button>
    </a>
    <a href="selectbus.php?form=deletebus.php">
      <button class="btn btn-default">Delete Bus</button>
    </a>
    <a href="selectbus.php?form=showbus.php">
      <button class="btn btn-default">Show Bus</button>
    </a>
    <a href="selectbus.php?form=addstop2.php">
      <button class="btn btn-default">Add Bus Stop</button>
    </a>
  </div>
</body>
</html>
