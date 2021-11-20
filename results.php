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
    $query2 = mysqli_query($con,"SELECT * FROM scores ORDER by total desc");
    echo "<table border='1'> 
    <tr>
    <th>Team Name</th>
    <th>Rank </th>
    <th>Total Score</th>
    <th>Score for Code </th>
    <th>Score for Presentation </th>
    <th>Score for Demo </th>
    <th>Score for Documentation </th>
    <th>Score for UI </th>
    </tr>";
    $rank=1;
    while($row = mysqli_fetch_array($query2))
    {
    echo "<tr>";
    echo "<td>" . $row['team_name'] . "</td>";
    echo "<td>" . $rank. "</td>";
    echo "<td>" . $row['total'] . "</td>";
    echo "<td>" . $row['factor1'] . "</td>";
    echo "<td>" . $row['factor2']. "</td>";
    echo "<td>" . $row['factor3'] . "</td>";
    echo "<td>" . $row['factor4']. "</td>";
    echo "<td>" . $row['factor5'] . "</td>";    
    
    echo "</tr>";
    $rank++;
    }
    echo "</table>";


?>
</div>
</body>
</html>