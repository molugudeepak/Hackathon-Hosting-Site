# Introduction:
The main aim of this project is to provide a platform to organize hackathon events. Users can register for events, and they can add their teammates. Judges can publish their scores using this application. Admin is responsible for creating events.
# Technologies Used:
HTML5, CSS3, PHP, MySQL, XAMPP Server, Git, GitHub, VS Code
# Features:
•	Admin can login into web application <br>
•	Participant/Judge can create an account <br>
•	Participant/Judge can login into application <br>
•	Admin can create an event on Admin Home Page <br>
•	Participant can view the list of events <br>
•	Participant can register for events <br>
•	Participant can see his scores <br>
•	Judges can give scores <br>
# How to use it:
 1. Intall the XAMMP server: https://www.apachefriends.org/download.html
 2. Clone this project to xampp/htdocs folder git clone https://github.com/molugudeepak/Hackathon-Hosting-Site.git
 3. Start the Tomcat, Apache and MySQL services in XAMPP contorl panel
 4. Create 'hackathon hosting site' in PHPmyAdmin.
 5. Create the following tables in the above database <br>
      <b>i.Events table</b>: 
      CREATE TABLE events (
    event_name VARCHAR(100) NOT NULL,
    event_location VARCHAR(100) NOT NULL,
    event_startdate DATE NOT NULL,
    event_enddate DATE NOT NULL);<br>
     <b>ii. Users table:</b>
     CREATE TABLE users (
    name VARCHAR(100) NOT NULL,
    phnum VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(10) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    usertype VARCHAR(100) NOT NULL); <br>
    <b>iii. Teams table:</b>
    CREATE TABLE teams (
    name VARCHAR(100) NOT NULL,
    team_name VARCHAR(100) NOT NULL  UNIQUE,
    team_member1 VARCHAR(100),
    team_member2 VARCHAR(100), 
    team_member3 VARCHAR(100));<br>
    <b>iv. Submission table:</b>
    CREATE TABLE submissions (
    username VARCHAR(100) NOT NULL UNIQUE,
    team_name VARCHAR(100) NOT NULL  UNIQUE,
    event_name VARCHAR(100),
    github_url VARCHAR(100), 
    demo_url VARCHAR(100));<br>
    <b>v. Scores table:</b>
    CREATE TABLE scores(
    team_name VARCHAR(100) NOT NULL  UNIQUE,
    factor1 INT NOT NULL,
    factor2 INT NOT NULL,
    factor3 INT NOT NULL,
    factor4 INT NOT NULL,
    factor5 INT NOT NULL
);







