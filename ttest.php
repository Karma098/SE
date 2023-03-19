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
     print_r($user_exist_query);
     print_r($result);
     $result_fetch=mysqli_fetch_assoc($result);
     print_r($result_fetch);
     print_r(mysqli_num_rows($result));
    //  if  ($result_fetch['Username']== $a){
    //     echo"
    //       <script>
    //         alert('Username already taken');
    //       </script>
    //     ";                
    // }
    //  if  ($result_fetch['Username']== $a){
    //  print_r($result_fetch['Username']);
    //  }

?>