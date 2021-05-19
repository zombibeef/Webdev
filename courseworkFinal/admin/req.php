<!doctype html>

<html lang="en">
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Panel</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="admin/style/css/bootstrap.min.css" rel="stylesheet">
        <link href="admin/style/css/k.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    </head>
    
    
    <body>

        <?php include("admin/include/header.php");?>
        <?php include("https://mayar.abertay.ac.uk/~1902471/CourseWork/js/blog.js");?>
        
        <div class="container-fluid">
            <?php include("admin/include/side_bar.php");?>


<div class="col-sm-9" style="margin-left:10px"> 
				<div class="panel-heading" style="background-color:#c4e17f">
					<h1>Requirements</h1>
				</div>

<p>If you have not met a requirement, do not delete it from the table.</p>

<table class="table table-bordered table-hover table-striped" style="font-size:18px">
  <tr>
    <th class="reqCol">Requirement</th>
    <th class="metCol">How did you meet this requirement?</th>
    <th class="fileCol">File name(s), line no.</th>
  </tr>
  <tr>
    <td>A clear use of HTML5</td>
    <td>Used HTML5 in both my header file, thats included within all my files. As well as this the basis of the site is HTML5 due to it being required to build a website</td>
    <td>
        about.php(lines 5-13)<br>
        blog.php(lines 6-24)<br>
        footer.php(lines 1-31)<br>
        header.php(lines 7-97)<br>
        index.php(lines 5-122)<br>
        loginform.php(lines 6-24)<br>
        mansion.php(lines 6-118)<br>
        perception.php(lines 6-29)<br>
        the-search.php(6-29)<br>
        therapy-session.php(6-29)<br>
    </td>
  </tr>
  <tr>
    <td>Use of the Bootstrap framework providing a responsive layout </td>
    <td>Used Bootstrap to format my pages, as well as navbar, buttons and image positions. This alongside written CSS has made a usable website for the end user. As well as this the admin section is done with bootstap. This has made it scaleable and responsive.</td>
    <td>
        index.php(lines 6-37, 46, 68, 69)<br>
        about.php(lines 6)<br>
        footer.php(lines 3-17)<br>
        header.php(lines 50-93)<br>
        mansion.php(lines 6-118)<br>
        loginform.php(lines 6-19)<br>
        mansion.php(lines 6, 12, 21)<br>
    </td>
  </tr>
  <tr>
    <td>Use of JavaScript to manipulate the DOM based on an event</td>
    <td>
        I have mutliple events where the DOM is maniputlated though JS. The example for this will be a mouseOver event on p tags. When moused over the background will change to black and text to white, adding more contrast and accessability.
    </td>
    <td>
        main.js(lines 89-97)
    </td>
  </tr>
  <tr>
    <td>JavaScript loading of dynamically changing information</td>
    <td>I used a countdown timer to meet this requirement</td>
    <td>main.js(lines 56-85)</td>
  </tr>
  <tr>
    <td>Use of jQuery in conjunction with the DOM</td>
    <td>Pulling in a text file when an image is clicked</td>
    <td>main.js(lines 99-157) </td>
  </tr>
  <tr>
    <td>Use of a jQuery plugin to enhance your application</td>
    <td>i used a weather widget to meet this requirement</td>
    <td>index.php(lines 50-53)</td>
  </tr>
  <tr>
    <td>Use of AJAX (pure JavaScript i.e. without the use of a library)</td>
    <td>Register button uses AJAX</td>
    <td>main.js(lines 4-24)</td>
  </tr>
  <tr>
    <td>Use of the jQuery AJAX function</td>
    <td>login button/script</td>
    <td>main.js(lines 30-53)</td>
  </tr>
  <tr>
    <td>User login functionality (PHP/MySQL)</td>
    <td>Login button on loginform.php</td>
    <td>main.js(lines 30-53)</td>
  </tr>
  <tr>
    <td>Admin section of the website (PHP/MySQL)</td>
    <td>there is an admin section to the website, within the admin folder</td>
    <td>
        the admin folder?
    </td>
  </tr>
  <tr>
    <td>Ability to select, add, edit and delete information from a database (PHP/MySQL)</td>
    <td>the manage_users.php page within the admin section allows for the ability to select, add, edit and delete.</td>
    <td>edit_user.php(lines 5-21, 57, 62)</td>
  </tr>
  <tr>
    <td>Appropriate consideration of relevant laws</td>
    <td>I have an alert popping up when the page is loaded stating the cookie policy, as well as this there is a link to the GDPR site within the footer</td>
    <td>
        index.php(lines 4)<br>
        footer.php(line 18)<br>
    </td>
  </tr>
  <tr>
    <td>Security measures</td>
    <td>
        </td>
    <td>

    </td>
  </tr>
  <tr>
    <td>SQL queries should be written as prepared statements</td>
    <td>
        both the login and register are done within prepared statements
    </td>
    <td>
        signin.php(lines 10-12)<br>
        register.php(lines 21-28)<br>
    </td>
  </tr>
  <tr>
    <td>Passwords should be salted and hashed</td>
    <td>all passwords are salted and hashed with phps hashing algorithm, blowfish</td>
    <td> register.php (lines28)</td>
  </tr>
  <tr>
    <td>Validation of user input</td>
    <td>The passwords are salted and hashed before they are placed into the database. they go through the htmlspecialchars function</td>
    <td>        signin.php(lines 4, 5)<br>
        register.php(lines 4, 5)<br></td>
  </tr>
  
  <tr>
    <td>Any other relevant security features</td>
    <td>There are sessions to validate logged in users</td>
    <td>header.php(lines 1-5)</td>
  </tr>
</table>
        </div>
		
</body>
</html>



