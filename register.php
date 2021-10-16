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
            <li><a href=Submission.php>Submission</a>&nbsp;&nbsp;</li>
            <li><a href=results.php>Results</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
<div class="form">
<h1 class="login-title">Register for an event </h1> 
<?php
    include("auth_session.php");
    require('db.php');
    // When form submitted, insert values into the database.
    $result = mysqli_query($con,"SELECT * FROM events");
    echo "<select name=student value=''>Student Name</option>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<option value=event_name>$row[event_name]</option>"; 
    }
?>
    <form class="form" action="" method="post">
        
        <input type="text" class="login-input" name="team_name" placeholder="Team Name" required />
        <input type="text" class="login-input" name="team_mate1" placeholder="Add Team Mate"/>
        <input type="text" class="login-input" name="team_mate2" placeholder="Add Team Mate"/>
        <input type="text" class="login-input" name="team_mate3" placeholder="Add Team Mate"/>
        <input type="submit" name="submit" value="Register" class="login-button">
        
    </form>
    </div>
</div>
</body>
</html>