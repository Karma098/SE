<?php

$c=$_POST['email'];

$con=mysqli_connect("localhost","root","","social_site");
if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to database');</script>";
    exit();
}
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($c){
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");
    $mail = new PHPMailer(true);

    try {                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'akabanek193@gmail.com';                     //SMTP username
        $mail->Password   = 'ztpjxghykubgkrbo';                                //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        $mail->setFrom('akabanek193@gmail.com', 'Karma');
        $mail->addAddress($c);    
       
        

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Verification from Server';
        $mail->Body    = "Forgot Password!
        Click the link below to reset your password
        <a href='http://localhost/SE/resetPass.html'>Reset Password</a>";
        
    
        $mail->send();
        return true;
    } 
    catch (Exception $e) {
       return false;
    }
}

$user_exist_query="SELECT * FROM user WHERE Email='$c'";
$result=mysqli_query($con, $user_exist_query);

if(mysqli_num_rows($result)){
    $result_fetch=mysqli_fetch_assoc($result);
    if($result_fetch['Email']== $c){
        sendMail($c);
        $_SESSION['email1']=$result_fetch['Email'];
        echo"
        <script>
            alert('see your email');
            window.location.href='index.php';
        </script>
    ";         
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