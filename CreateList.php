<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

error_reporting(E_ALL);
ini_set('display_errors', 1);


session_start();
if (!isset($_SESSION['username'])) {
    die(json_encode(["success" => false, "message" => "User not logged in"]));
}

$USERNAME = $_SESSION['username'];

if (!isset($_POST['CardID']) || empty($_POST['CardID'])) {
    die(json_encode(["success" => false, "message" => "CardID missing"]));
}

$CardID = intval($_POST['CardID']);
$ListName = mysqli_real_escape_string($conn, $_POST['ListName']);
$ListDescription = mysqli_real_escape_string($conn, $_POST['ListDescription']);

$sql = "INSERT INTO list (CardID, username, ListName, ListDescription)
        VALUES ('$CardID', '$USERNAME', '$ListName', '$ListDescription')";

if ($conn->query($sql) === TRUE) {
    echo json_encode([
        "success" => true,
        "message" => "List created",
        "ListID" => $conn->insert_id
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => $conn->error
    ]);
}

$conn->close();
?>