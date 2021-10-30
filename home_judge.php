<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Hackathon Hosting Site</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="style1.css"/>
    <header>
  <div class="container">
    <nav>
        <ul>
            <li><a href=home_judge.php>Projects</a>&nbsp;&nbsp;</li>
            <li><a href=scores.php>Scores</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<form class="form" action="" method="post">
<h1 class="login-title">View Projects </h1>
<?php
    require('db.php');
    include("auth_session.php");
    // When form submitted, insert values into the database.
    $result = mysqli_query($con,"SELECT * FROM events");
    echo "<select name=event_name value=''>Event Name</option>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<option value=$row[event_name]>$row[event_name]</option>"; 
    }
    ?>
    <input type="submit" name="submit" value="View Projects" class="login-button">
        
        </form>
        <div class= form>
        <h1 class="login-title">Teams </h1> 
        <?php
        if (isset($_REQUEST['event_name'])) {
            $result = mysqli_query($con,"SELECT * FROM teams");
       
            echo "<table border='1'> 
            <tr>
            <th>Team Name</th>
            <th>Team Leader</th>
            </tr>";
            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['team_name'] . "</td>";
            echo "<td>" . $row['team_leader'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        
        
        }
    ?>

</div>
</body>
</html>