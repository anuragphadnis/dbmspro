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
    $name=$_POST['name'];
    $cno=(int)$_POST['cno'];
    $email=$_POST['email'];
    $add1=$_POST["add1"];
    $add2=$_POST["add2"];
    $city=$_POST['city'];
    $clg=$_POST['clg'];
    $sem=$_POST['sem'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    include "dbinit.php";
    $qr="
    insert into regpeople
    (evtitle, cno, email, address1, address2, city, college, semester, branch, course, name)
    VALUES
    ('$evtitle','$cno','$email','$add1','$add2','$city','$clg','$sem','$branch','$course','$name');
    ";
    $sqlqr=mysqli_query($con,$qr)or die(mysqli_error($con));
    echo "Upload success";
   ?>
</body>
