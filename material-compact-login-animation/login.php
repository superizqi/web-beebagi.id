<?php
session_start();
$usernameLogin = filter_input(INPUT_POST, 'username');
$passwordLogin = filter_input(INPUT_POST, 'password');




    $servername = "localhost";
    $username = "sabtumin_root";
 $password = "123456";
 $dbname = "sabtumin_login";

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "db_beebagi";

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
          $_SESSION['username'] = $usernameDb;
          // echo"Login Sukses";
        //   echo '<script type="text/javascript">alert("Login Sukses");</script>';
        //   header('Location: http://beebagi.id/material-compact-login-animation/logins.html');
          //header('Location: beebagi/homepage.php');
          header('Location: http://beebagi.id/homepage.php');
        // $message = 'Login Sukses';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"http://beebagi.id\");
    </SCRIPT>";
        }else {
         $message = 'Username Atau Password Anda Salah';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"http://beebagi.id/material-compact-login-animation/logins.html\");
    </SCRIPT>";
        }
    }
} else {
   $message = 'Login Gagal';

echo "<SCRIPT type='text/javascript'> //not showing me this
    alert('$message');
    window.location.replace(\"http://beebagi.id/material-compact-login-animation/logins.html\");
</SCRIPT>";
}

mysqli_close($conn);



?>
