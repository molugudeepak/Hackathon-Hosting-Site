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
            <li><a href="ranks.php">Rankings</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
<div class="form1">
<h1 class="login-title">Score Board</h1> 
<?php
    include("auth_session.php");
    require('db.php');
    global $team_name;
    $username = $_SESSION['username'];
    $query = "SELECT * FROM `teams` WHERE name='$username'";
    $result = mysqli_query($con, $query);
    $row =  mysqli_fetch_array($result);
    $team_name = $row['team_name'];
    $query2 = mysqli_query($con,"SELECT * FROM scores where team_name='$team_name'");
    echo "<table border='1'> 
    <tr>
    <th>Total Score</th>
    <th>Score for Code </th>
    <th>Score for Presentation </th>
    <th>Score for Demo </th>
    <th>Score for Documentation </th>
    <th>Score for UI </th>
    <th>Rank </th>
    </tr>";
    while($row = mysqli_fetch_array($query2))
    {
    echo "<tr>";
    echo "<td>" . $row['factor1'] . "</td>";
    echo "<td>" . $row['factor2']. "</td>";
    echo "<td>" . $row['factor3'] . "</td>";
    echo "<td>" . $row['factor4']. "</td>";
    echo "<td>" . $row['factor5'] . "</td>"; 
    echo "<td>" . $row['total'] . "</td>";   
    
    echo "</tr>";
    }
    echo "</table>";


?>
</div>
</body>
</html>