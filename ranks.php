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
            <li><a href="results.php">Results</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
<div class="form">
<h1 class="login-title">Score Board</h1> 
<?php
    include("auth_session.php");
    require('db.php');
    global $team_name;
    $query = mysqli_query($con,"SELECT * FROM scores");
    echo "<table border='1'> 
    <tr>
    <th>Team Name</th>
    <th>Ranking </th>
    </tr>";
    $rank=1;
    while($row = mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>" . $row['team_name'] . "</td>";
    echo "<td>" . $rank. "</td>";
    $rank++; 
    
    echo "</tr>";
    }
    echo "</table>";


?>
</div>
</body>
</html>