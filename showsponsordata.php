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
    $qr="select name_of_sponser,sponsership from sponser where event_title='$evtitle'";
    $sqlqr=mysqli_query($con,$qr) or die("Error while retriving data");
    echo '<table>
    <tr>
    <th>Sponsor Name</th>
    <th>Amount</th>
    </tr>';
    while($row=mysqli_fetch_array($sqlqr))
    {
      echo "
      <tr>
      <td>$row[0]</td>
      <td>$row[1]</td>
      </tr>";
    }
   ?>
</body>
