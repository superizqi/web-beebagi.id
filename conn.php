<?php
session_start();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "db_beebagi";

$servername = "localhost";
$username = "sabtumin_root";
$password = "123456";
$dbname = "sabtumin_login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
