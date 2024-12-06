<h1>Space Raider</h1>

<p>In this game your goal is to shoot down incoming 
spaceship (the falling blocks) to protect your planet
from invasion. Additionally, there are also spaceships that are not loyal to the alien cause and will actually aid you in
your prevention of their invasion by giving you a huge score increase. 
</p>
<br>
<p>You can play the game here: https://users.aber.ac.uk/lom50/SpaceRaiders/cs25320-coursework/falling_stuff.html</p>




<h2>How to Play</h2>

<pre>
    'A' or left-arrow to move left
    'D' or right-arrow to move right
    'F' or left-click to shoot
</pre>

<p>
    Avoid falling red boxes that take away your health or shoot them down for even more score.
    Collect yellow boxes by letting them hit you for a score increase and to freeze time for a short period or get a 
    'mega shot' which is wider and doesn't get destroyed on contact with the red boxes, shooting them gives you the same 
    score as shooting a red box. 
<br><br>
    As your score increase, so does the level which in turn makes the aliens even angrier and in retaliation they increase
    their rate of attack with more and quicker spaceships. Try and get the highest score you can maybe you'll get your
    name on the leaderboard. 
</p>

<h2>Installation</h2>

<h3>Deploying to the University Apache Server</h3>
<p>To deploy this project to the University Apache server you first need to open a terminal window and enter the command 
'ssh userID@shellsrv.dcs.aber.ac.uk' (where userID is replaced by your personal user ID) and then enter your password.
Then navigated your way to your 'public_html' folder and use the command 'git clone repo URL' with 'repo URL' being
replaced with the repository URL. This URL is found by going to the repository in GitLab, clicking 'Code' and then copying
the link under 'Clone with SSH'. </p>

<h3>Configuring the Database</h3>
<p>Firstly you will need to have an account set up a login to the University PostgreSQL server. You should then use these 
details to alter the 'db_secrets.php' file that has been provided where the comments permit it and then put its path in
the 'get_db_connection.php' file where the comments permit. Finally, 
you will need to create a database with PostgreSQL with the name 'random_canvas_leaderboard'. 
You will need to be connected to the University network to connect to their database. This can either be done by 
being on IS provided machines or connecting your own personal device to the network by using their VPN.</p>

<h3>DataBase Schema</h3>
To create the database copy the below code into your database terminal.
<pre>
CREATE TABLE random_canvas_leader(name varchar(20), score INTEGER, primary key (name));
</pre>

<h2>Licensing and Credit</h2>

CS25320 JavaScript Starter Canvases © 2022 by Edel Sherratt is licensed under CC BY-NC-SA 4.0
<br>Minor updates to use 'lets' and simplifying x move position calculation. Chris Loftus
<br>CS25320 leaderboard demo © 2022 by Edel Sherratt is licensed under CC BY-NC-SA 4.0 (this includes all PHP files used)
