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
            <img src=
            
            <?php
              if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                echo"$_SESSION[img]";
              }
            ?>
            
            alt="Profile Picture">
            <h1>

            <?php
              if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                echo"$_SESSION[username]";
              }
            ?>

            </h1>
            <h3>Scheme</h3>
            <hr>
            <p></p>
            <ul>
                <li><strong>Email:</strong>
                
                <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                        echo"$_SESSION[email]";
                    }
                ?>

                </li>
                <li><strong>Phone:</strong> 
                
                <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                        echo"$_SESSION[phone]";
                    }
                ?>
                
                </li>
                
                <a href="index.php">Logout</a>
            </ul>
        </div>
    </div>
</body>
</html>
