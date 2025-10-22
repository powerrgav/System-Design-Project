<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//collect and sanitze form data
$email = mysqli_escape_string($conn, $_POST["email"]);
$password = mysqli_escape_string($conn, $_POST["confirm_password"]);

//check if user is admin (me, gavin)
$isAdmin = ($email === 'powerrgav') ? 1 : 0;

$sql = "INSERT INTO user(username, password, isAdmin) VALUES ('$email', '$password', '$isAdmin')";

if ($conn->query($sql) === TRUE) {
    echo $email;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>