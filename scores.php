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
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</form>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
    <form class="form" action="" method="post">
        <h1 class="login-title">Scores</h1>
        <?php
    include("auth_session.php");
    require('db.php');
    global $team_name;
    if (isset($_REQUEST['factor1'])) {
        // removes backslashes
        $team_name = stripslashes($_REQUEST['team_name']);
        //escapes special characters in a string
        $team_name = mysqli_real_escape_string($con, $team_name);
        echo $team_name;
        $factor1 = stripslashes($_REQUEST['factor1']);
        $factor1 = mysqli_real_escape_string($con, $factor1);
        $factor2 = stripslashes($_REQUEST['factor2']);
        //escapes special characters in a string
        $factor2 = mysqli_real_escape_string($con, $factor2);
        $factor3 = stripslashes($_REQUEST['factor3']);
        $factor3 = mysqli_real_escape_string($con, $factor3);   
        $factor4 = stripslashes($_REQUEST['factor4']);
        $factor4 = mysqli_real_escape_string($con, $factor4);
        $factor5 = stripslashes($_REQUEST['factor5']);
        $factor5 = mysqli_real_escape_string($con, $factor5); 
        $total = $factor1+$factor2+$factor3+$factor4+$factor5;  
        $query    = "INSERT into `scores`(team_name, factor1, factor2, factor3, factor4, factor5, total)
                     VALUES ('$team_name', '$factor1', '$factor2','$factor3', '$factor4','$factor5','$total')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Scores Given successfully.</h3><br/>
                  <p class='link'>Click here to <a href='home_participant.php'>Home</a></p>
                  </div>";}
            else{     
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>Register</a></p>
                  </div>";
                
        }
    } else {
    // When form submitted, insert values into the database.
  
    // When form submitted, insert values into the database.
    $result = mysqli_query($con,"SELECT * FROM submissions");
    echo "<select name=team_name value=''>Team Name</option>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<option value=$row[team_name]>$row[team_name]</option>"; 
    }
?>     
    
        <input type="number" class="login-input" name="factor1" placeholder="Score for code" required min = 0 max=20 />
        <input type="number" class="login-input" name="factor2" placeholder="Score for Presentation" required min = 0 max=20/>
        <input type="number" class="login-input" name="factor3" placeholder="Score for Demo" required min = 0 max=20>
        <input type="number" class="login-input" name="factor4" placeholder="Score for Doc" required min = 0 max=20>
        <input type="number" class="login-input" name="factor5" placeholder="Score for UI" required min = 0 max=20>
        <input type="submit" name="submit" value="Submission" class="login-button">
      
    </form>
    </div>
<?php
    } 
?>
</body>
</html>