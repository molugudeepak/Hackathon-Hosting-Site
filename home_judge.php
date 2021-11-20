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
    <input type="submit" name="submit" value="View Projects"class="login-button">
        
        </form>
        <div class= "form1">
        <h1 class="login-title">Teams </h1> 
        <?php
        if (isset($_REQUEST['event_name'])) {

            $event_name = stripslashes($_REQUEST['event_name']);
            //escapes special characters in a string
            $event_name = mysqli_real_escape_string($con, $event_name);
            $result = mysqli_query($con,"SELECT * FROM submissions WHERE event_name='$event_name'");
            $rows = mysqli_num_rows($result);
            if ($rows >0){
            echo "<table border='1'> 
            <tr>
            <th>Team Name</th>
            <th>GitHub URL</th>
            <th>Demo URL</th>
            <th>Documentation</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            ?>
            <tr>
            <td><?php echo $row['team_name'] ?></td>
            <td><?php echo $row['github_url'] ?></td>
            <td><?php echo $row['demo_url'] ?></td>
            <?php 
            ?>
            
            <td> <a href="download.php?file_name=<?$row['file_name']?>"><?php echo  $row['file_name']?></a></td>

            <tr>
        <?php
    
        }
            echo "</table>";
        
            }
        else{
            echo "<table border='1'> 
            <tr>
            <th>No teams registered</th>
            </tr>";

        }
        }

    
    ?>

</div>
</body>
</html>