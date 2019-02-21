<?php
 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
 // $repeatPassword = filter_input(INPUT_POST, 'password2');
 if (!empty($username)){
if (!empty($password)){

$host = "localhost";
$dbusername = "sabtumin_root";
$dbpassword = "123456";
$dbname = "sabtumin_login";

// $host = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "loginform";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO login_form (username, password)
values ('$username','$password')";

if ($conn->query($sql)){


header('Location: http://beebagi.id/');
}
  else {
      $message = 'User Already Exist';

    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"http://beebagi.id/material-compact-login-animation/logins.html\");
    </SCRIPT>";

}
$conn->close();
}
}
else{
  $message = 'Password should not be empty';

echo "<SCRIPT type='text/javascript'> //not showing me this
    alert('$message');
    window.location.replace(\"http://beebagi.id/material-compact-login-animation/logins.html\");
</SCRIPT>";
}
}
else{
  $message = 'Username should not be empty';

  echo "<SCRIPT type='text/javascript'> //not showing me this
    alert('$message');
    window.location.replace(\"http://beebagi.id/material-compact-login-animation/logins.html\");
  </SCRIPT>";
}
?>
