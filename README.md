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
      i. Events table: 
      CREATE TABLE events (
    event_name VARCHAR(100) NOT NULL,
    event_location VARCHAR(100) NOT NULL,
    event_startdate DATE NOT NULL,
    event_enddate DATE NOT NULL);


