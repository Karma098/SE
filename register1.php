<?php

$a=$_POST['username'];
$b=$_POST['full_name'];
$c=$_POST['email'];
$d=$_POST['password'];

$con=mysqli_connect("localhost","root","","social_site");
if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to database');</script>";
    exit();
}

    $user_exist_query="SELECT * FROM user WHERE Username='$a' OR Email='$c'";
    $result=mysqli_query($con, $user_exist_query);
    

    if(mysqli_num_rows($result)){
        $result_fetch=mysqli_fetch_assoc($result);
        if($result_fetch['Username']== $a){
            echo"
              <script>
                alert('Username already taken');
                window.location.href='register.html';
              </script>
            ";                
        }
        else
        {
            echo"
                <script>
                    alert('E-mail already registered');
                    window.location.href='register.html';
                </script>
            ";
        }
    }
    else{
        $password=password_hash($d,PASSWORD_BCRYPT);
        $query="INSERT INTO `user`(`Username`, `Full_Name`, `Email`, `Password`) VALUES ('$a','$b','$c','$password')";
        if(mysqli_query($con,$query)){
            echo"
                <script>
                alert('Registered successfully');
                window.location.href='index.html';
                </script>
            ";
        }
        else{
            echo"
                <script>
                alert('Cannot Run Query1');
                window.location.href='index.html';
                </script>
            ";
        }
    }
    

?>