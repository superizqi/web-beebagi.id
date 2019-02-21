<?php
include 'conn.php';



if(isset($_SESSION['username']))
{
    header("Location: homepage.php");
    exit;
}else {
    // header("Location: homepage.php");
    // header("Location: material-compact-login-animation/logins.html");
    header("Location: homepage.php");
}


 ?>
