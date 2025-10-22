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
    die(json_encode([]));
}

$USERNAME = $_SESSION['username'];
$CardID = isset($_GET['CardID']) ? intval($_GET['CardID']) : 0;

$sql = "SELECT * FROM list WHERE USERNAME = '$USERNAME' AND CardID = $CardID";
$result = $conn->query($sql);

$lists = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $lists[] = $row;
    }
}

echo json_encode($lists);
$conn->close();
?>

