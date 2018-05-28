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
    $busno=$_POST['busno'];
    $qu="select * from busstop where busno='$busno'";
    $sqlqr=mysqli_query($con,$qu);
    echo "<table>
    <tr>
      <th>Bus stop</th>
      <th>Departure</th>
      <th>Return</th>
    </tr>";
    while($row=mysqli_fetch_array($sqlqr))
    {
      echo "<tr>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
      </tr>
      ";
    }
    echo "</table>"
   ?>
</body>
