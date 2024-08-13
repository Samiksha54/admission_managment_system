<?php
$usrName = $_POST["txtusername"];
$usrPwd = $_POST["txtpassword"];

// Establish connection with the server
$connection = mysqli_connect('localhost', 'root', '', 'login');

// Check connection if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL query
$query = "SELECT username, password FROM authentication WHERE username = '$usrName' AND password = '$usrPwd'";

$result = mysqli_query($connection, $query);
$rowcount = mysqli_num_rows($result);

if ($rowcount == 1) { header("Location: homepage.html"); exit();
} else {
echo "Verify user name and password!!!!<br/><a href=\"Login_page.html\">BACK</a>";
}

// Close the connection mysqli_close($connection);
?>

