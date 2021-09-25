<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
  
<link rel="stylesheet" href="style1.css" />
<header>
<div class="container">
</div>
</header>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
<div class="form">
<h1 class="login-title">Register for an event </h1>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    $result = mysqli_query($con,"SELECT * FROM events");
   
    echo "<table border='1'> 
    <tr>
    <th>Event Name</th>
    <th>Venue</th>
    <th>Start Date</th>
    <th>End Date</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['event_name'] . "</td>";
    echo "<td>" . $row['event_location'] . "</td>";
    echo "<td>" . $row['event_startdate'] . "</td>";
    echo "<td>" . $row['event_enddate']. "</td>";
    
    
    echo "</tr>";
    }
    echo "</table>";


?>
</div>
</body>
</html>