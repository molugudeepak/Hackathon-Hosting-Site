<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="style1.css"/>
    <header>
  <div class="container">
    <nav>
        <ul>
            <li><a href="register.php">Register</a>&nbsp;&nbsp;</li>
            <li><a href=Submission.php>Submission</a>&nbsp;&nbsp;</li>
            <li><a href=results.php>Results</a>&nbsp;&nbsp;</li>
            <li><a href="ranks.php">Rankings</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
<div class="form">
<h1 class="login-title">New Events</h1> 
<?php
    include("auth_session.php");
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