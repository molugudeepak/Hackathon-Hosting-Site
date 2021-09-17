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
    if (isset($_REQUEST['event_name'])) {
        // removes backslashes
        $event_name = stripslashes($_REQUEST['event_name']);
        //escapes special characters in a string
        $event_name = mysqli_real_escape_string($con, $event_name);
        $event_location = stripslashes($_REQUEST['event_location']);
        //escapes special characters in a string
        $event_location = mysqli_real_escape_string($con, $event_location);
        $event_startdate    = stripslashes($_REQUEST['event_startdate']);
        $event_startdate    = mysqli_real_escape_string($con, $event_startdate);
        $event_enddate = stripslashes($_REQUEST['event_enddate']);
        //escapes special characters in a string
        $event_enddate= mysqli_real_escape_string($con, $event_enddate);

        $query    = "INSERT into `events` (event_name, event_location, event_startdate, event_enddate)
                     VALUES ('$event_name', '$event_location', '$event_startdate', '$event_enddate')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Successfully created an event
                  </h3><br>
                  <p class='link'>Click here to <a href='home_admin.php'>create another event</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='home_admin.php'>create an event</a></p>
                  </div>";
        }
    } else {
?>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Hackathon Hosting Site </h1>
    <form class="form" action="" method="post">
        <h1 class="login-title">Create an Event</h1>
        <input type="text" class="login-input" name="event_name" placeholder="Event Name" required />
        <input type="text" class="login-input" name="event_location" placeholder="Event Location" required />
        <input type="date" class="login-input" name="event_startdate" placeholder="Start Date" required>
        <input type="date" class="login-input" name="event_enddate" placeholder="End Date" required />
        <input type="submit" name="Create" value="Create" class="login-button">

    </form>
    </div>
<?php
    }
?>
</body>
</html>