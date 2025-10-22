<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION["username"])) {
  echo json_encode(["error" => "Session not found"]);
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
  exit;
}

$user = $conn->real_escape_string($_SESSION["username"]);

$sql = "SELECT BoardID, BoardName, BoardPrivacy, BoardColor 
        FROM board WHERE username = '$user'";
$result = $conn->query($sql);

if (!$result) {
  echo json_encode(["error" => $conn->error]);
  exit;
}

$boards = [];
while ($row = $result->fetch_assoc()) {
  $boards[] = $row;
}

echo json_encode($boards);
$conn->close();
?>