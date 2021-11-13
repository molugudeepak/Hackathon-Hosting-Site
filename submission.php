<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Submission</title>
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body> 
<?php
include("auth_session.php");
require('db.php');
if (isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $query = "SELECT * FROM `teams` WHERE name='$username'";
    $result = mysqli_query($con, $query);
    $row =  mysqli_fetch_array($result);
    $event_name = $row[event_name];
    
    $team_name = $row[team_name];
    $demoUrl = stripslashes($_REQUEST['demoUrl']);
    $demoUrl = mysqli_real_escape_string($con, $demoUrl);
    $githubUrl = stripslashes($_REQUEST['githubUrl']);
    $githubUrl = mysqli_real_escape_string($con, $githubUrl);
    echo $githubUrl;

    $filename = $_FILES['documentation']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['documentation']['tmp_name'];
    $size = $_FILES['documentation']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .pdf or .docx";
    } elseif ($_FILES['documentation']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO submissions (username, event_name, team_name, github_url, demo_url, file_name)
                     VALUES ('$username', '$event_name', '$team_name','$githubUrl','$demoUrl','$filename')";
            if (mysqli_query($con, $sql)) {
                    echo "<div class='form'>
                          <h3>You are submitted successfully.</h3><br/>
                          <p class='link'>Click here to <a href='home_participant.php'>Home</a></p>
                          </div>";
            }
        } else {
            echo "<div class='form'>
                <h3>Required fields are missing.</h3><br/>
                <p class='link'>Click here to <a href='register.php'>Register</a></p>
                </div>";
        }
    }
}else {
?>
<link rel="stylesheet" href="style1.css" />
<header>
<div class="container">
    <nav>
        <ul>
            <li><a href=home_participant.php>Register</a>&nbsp;&nbsp;</li>
            <li><a href=Results.php>Results</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
</div>
</header>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <h1 class="login-title">Submission</h1>
        <input type="url" class="login-input" name="githubUrl" placeholder="GitHub URL" required />
        <input type="url" class="login-input" name="demoUrl" placeholder="Demo URL"required />
        <input type="file" class="login-input" name="documentation" placeholder="Documentation" required>
        <button type="submit" name="submit" value="submit" class="login-button">
      
    </form>
    </div>
<?php
    }
?>
</body>
</html>