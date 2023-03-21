<?php

$c=$_POST['email'];

$con=mysqli_connect("localhost","root","","social_site");
if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to database');</script>";
    exit();
}



?>