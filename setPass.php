<?php

$a=$_POST['password'];

$con=mysqli_connect("localhost","root","","social_site");
if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to database');</script>";
    exit();
}
session_start();

$user_exist_query="SELECT * FROM user WHERE Email='$_SESSION[email1]'";
$result=mysqli_query($con, $user_exist_query);

if(mysqli_num_rows($result)){
    $result_fetch=mysqli_fetch_assoc($result);
    if($result_fetch['Email']== $_SESSION['email1']){
        $password1=password_hash($a,PASSWORD_BCRYPT);
        // $v_code1=bin2hex(random_bytes(16));
        $query="UPDATE user SET Password='$password1' WHERE Email='$_SESSION[email1]'";
        if(mysqli_query($con,$query)){
            echo"
                <script>
                    alert('Password changed successfully');
                    window.location.href='index.php';
                </script>
            ";
        }
        else{
            echo"
                <script>
                    alert('cannot run query');
                    window.location.href='index.php';
                </script>
            ";
        }    
    }
}
    else{
        echo"
        <script>
            alert('E-mail does not exist');
            window.location.href='index.php';
        </script>
    ";
    }


?>