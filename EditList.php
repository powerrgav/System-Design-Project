<?php
header('Content-Type: application/json');
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
file_put_contents("editlist_debug.txt", print_r($_POST, true));



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "DB connection failed"]);
    exit;
}

if (!isset($_SESSION['username'])) {
    echo json_encode(["success" => false, "message" => "User not logged in"]);
    exit;
}

$USERNAME = $_SESSION['username'];

if (!isset($_POST['ListID'])) {
    echo json_encode(["success" => false, "message" => "Missing ListID"]);
    exit;
}

$ListID = intval($_POST['ListID']);
$ListName = mysqli_real_escape_string($conn, $_POST['ListName']);
$ListDescription = mysqli_real_escape_string($conn, $_POST['ListDescription']);

$sql = "
    UPDATE list
    SET ListName='$ListName', ListDescription='$ListDescription'
    WHERE ListID='$ListID' AND username='$USERNAME'
";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true, "message" => "List updated"]);
} else {
    echo json_encode(["success" => false, "message" => $conn->error]);
}

$conn->close();
?>
