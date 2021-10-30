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
            <li><a href=home_participant.php>Home</a>&nbsp;&nbsp;</li>
            <li><a href=Submission.php>Submission</a>&nbsp;&nbsp;</li>
            <li><a href=results.php>Results</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>

</head>
<body><?php
    require('db.php');
    include("auth_session.php");
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['team_name'])) {
        // removes backslashes
        $username = $_SESSION['username'];
        $query1 = "SELECT * FROM `users` WHERE username='$username'";
        $result1 = mysqli_query($con, $query1);
        $row =  mysqli_fetch_array($result1);
        $name = $row[name];
        $event_name = stripslashes($_REQUEST['event_name']);
        //escapes special characters in a string
        $event_name = mysqli_real_escape_string($con, $event_name);
        $team_name = stripslashes($_REQUEST['team_name']);
        //escapes special characters in a string
        $team_name = mysqli_real_escape_string($con, $team_name);
        $team_mate1    = stripslashes($_REQUEST['team_mate1']);
        $team_mate1    = mysqli_real_escape_string($con, $team_mate1);
        $team_mate2 = stripslashes($_REQUEST['team_mate2']);
        //escapes special characters in a string
        $team_mate2 = mysqli_real_escape_string($con, $team_mate2);
        $team_mate3 = stripslashes($_REQUEST['team_mate3']);
        $team_mate3 = mysqli_real_escape_string($con, $team_mate3);      
        $query    = "INSERT into `teams` (name, event_name, team_name, team_leader, team_member1, team_member2, team_member3)
                     VALUES ('$username', '$event_name', '$team_name', '$team_mate1', '$team_mate1','$team_mate2', '$team_mate3')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='home_participant.php'>Home</a></p>
                  </div>";}
            else{     
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>Register</a></p>
                  </div>";
                
        }
    } else {
?>

<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>


<form class="form" action="" method="post">
<h1 class="login-title">Register for an event </h1> 
<?php
    // When form submitted, insert values into the database.
    $result = mysqli_query($con,"SELECT * FROM events");
    echo "<select name=event_name value=''>Event Name</option>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<option value=$row[event_name]>$row[event_name]</option>"; 
    }
?>
        <input type="text" class="login-input" name="team_name" placeholder="Team Name" required />
        <input type="text" class="login-input" name="team_mate1" placeholder="Add Team Mate"/>
        <input type="text" class="login-input" name="team_mate2" placeholder="Add Team Mate"/>
        <input type="text" class="login-input" name="team_mate3" placeholder="Add Team Mate"/>
        <input type="submit" name="submit" value="Register" class="login-button">
        
    </form>
</div>

<?php
    }
?>
</body>
</html>