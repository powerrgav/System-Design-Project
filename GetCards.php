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
$BoardID = isset($_GET['BoardID']) ? intval($_GET['BoardID']) : 0;

$sql = "SELECT * FROM card WHERE USERNAME = '$USERNAME' AND BoardID = $BoardID";
$result = $conn->query($sql);

$cards = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cards[] = $row;
    }
}

echo json_encode($cards);
$conn->close();
?>

