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
    // When form submitted, insert values into the database.
    $result = mysqli_query($con,"SELECT * FROM events");
    echo "<select name=student value=''>Student Name</option>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<option value=event_name>$row[event_name]</option>"; 
    ?>
        <input type="number" class="login-input" name="factor1" placeholder="Score for code" required />
        <input type="number" class="login-input" name="factor2" placeholder="Score for Presentation" required/>
        <input type="number" class="login-input" name="factor3" placeholder="Score for Demo" required>
        <input type="number" class="login-input" name="factor4" placeholder="Score for Doc" required>
        <input type="number" class="login-input" name="factor5" placeholder="Score for UI" required>
        <input type="submit" name="submit" value="Submission" class="login-button">
      
    </form>
    </div>
<?php
    }
?>
</body>
</html>