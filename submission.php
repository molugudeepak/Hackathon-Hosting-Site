<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
  
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
    <form class="form" action="" method="post">
        <h1 class="login-title">Submission</h1>
        <input type="url" class="login-input" name="githubUrl" placeholder="GitHub URL" required />
        <input type="url" class="login-input" name="demoUrl" placeholder="Demo URL"/>
        <input type="file" class="login-input" name="documentation" placeholder="Documentation" required>
        <input type="file" class="login-input" name="other1" placeholder="Other">
        <input type="file" class="login-input" name="other2" placeholder="Other" required>
        <input type="submit" name="submit" value="Submission" class="login-button">
      
    </form>
    </div>
</body>
</html>