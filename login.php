<?php
$usernameLogin = filter_input(INPUT_POST, 'username');
$passwordLogin = filter_input(INPUT_POST, 'password');



$servername = "localhost";
$username = "sabtumin_root";
$password = "123456";
$dbname = "sabtumin_login";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "loginform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM login_form WHERE username = '$usernameLogin'";
// echo $sql;
$result = mysqli_query($conn, $sql);
$usernameDb = "";
$passwordDb = "";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "username: " . $row["username"]. " - Password: " . $row["password"]."<br>";
        $usernameDb = $row["username"];
        $passwordDb = $row["password"];
        if ($usernameDb === $usernameLogin and  $passwordDb === $passwordLogin ) {
          // echo"Login Sukses";
          echo '<script type="text/javascript">alert("Login Sukses");</script>';
          header('Location: http://beebagi.id/');
        }else {
          // echo "Login Gagal";
          echo '<script type="text/javascript">alert("Login Gagal");</script>';
        }
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
