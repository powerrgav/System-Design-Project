<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
if (!isset($_SESSION['username'])) {
    die("Error: User not logged in");
}

$USERNAME = $_SESSION['username'];

if (!isset($_POST['CardID']) || empty($_POST['CardID'])) {
    die("Error: CardID missing");
}

$CardID = intval($_POST['CardID']);
$ListName = mysqli_real_escape_string($conn, $_POST['ListName']);
$ListDescription = mysqli_real_escape_string($conn, $_POST['ListDescription']);

$sql = "INSERT INTO list (CardID, USERNAME, ListName, ListDescription)
        VALUES ('$CardID', '$USERNAME', '$ListName', '$ListDescription')";

if ($conn->query($sql) === TRUE) {
    echo "List created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
