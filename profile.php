<?php
  require('connection.php');
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile_css.css">
</head>
<body>
    <div class="container">
        <div class="profile">
            <img src="profile-pic.jpg" alt="Profile Picture">
            <h1>Jane Doe</h1>
            <h3>Web Developer</h3>
            <hr>
            <p></p>
            <ul>
                <li><strong>Email:</strong> jane.doe@example.com</li>
                <li><strong>Phone:</strong> (123) 456-7890</li>
                <li><strong>Website:</strong> www.janedoe.com</li>
            </ul>
        </div>
    </div>
</body>
</html>
