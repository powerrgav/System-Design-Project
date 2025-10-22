<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$inputUser = mysqli_real_escape_string($conn, $_POST["logInEmail"]);
$inputPass = mysqli_real_escape_string($conn, $_POST["logInPassword"]);

$sql = "SELECT * FROM user WHERE username = '$inputUser' AND password = '$inputPass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $_SESSION["username"] = $inputUser;
  echo "Welcome, " . htmlspecialchars($inputUser);
} else {
  echo "Invalid username or password.";
}

$conn->close();
?>