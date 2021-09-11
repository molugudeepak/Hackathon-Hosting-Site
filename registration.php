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
</div>
</header>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $phnum = stripslashes($_REQUEST['phnum']);
        //escapes special characters in a string
        $phnum = mysqli_real_escape_string($con, $phnum);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $usertype = stripslashes($_REQUEST['usertype']);
        $usertype = mysqli_real_escape_string($con, $usertype);
       
        $query    = "INSERT into `users` (name, phnum, email, username, password, usertype)
                     VALUES ('$name', '$phnum', '$email', '$username','$password', '$usertype')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" required />
        <input type="text" class="login-input" name="phnum" placeholder="Mobile No" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="radio" id="usertype" name="usertype" value="Judge"> <label for="Judge">Judge</label>
        <input type="radio" id="usertype" name="usertype" value="Participant"> <label for="Participant">Participant</label>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="index.php">Click to Login</a></p>
    </form>
    </div>
<?php
    }
?>
</body>
</html>