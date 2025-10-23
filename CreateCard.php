<?php
header('Content-Type: application/json');
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]);
    exit;
}

if (!isset($_SESSION['username'])) {
    echo json_encode(["success" => false, "message" => "User not logged in"]);
    exit;
}

$BoardID = isset($_POST['BoardID']) ? intval($_POST['BoardID']) : 0;
$CardName = $_POST['cardName'] ?? '';
$CardDescription = $_POST['cardDescription'] ?? '';
$CardColor = $_POST['cardColor'] ?? '#FFFFFF';
$Username = $_SESSION['username'];

if ($BoardID <= 0) {
    echo json_encode(["success" => false, "message" => "Missing or invalid BoardID"]);
    exit;
}

$stmt = $conn->prepare("INSERT INTO card (BoardID, USERNAME, CardName, CardDescription, CardColor) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $BoardID, $Username, $CardName, $CardDescription, $CardColor);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Card created successfully", "CardID" => $stmt->insert_id]);
} else {
    echo json_encode(["success" => false, "message" => "Database error: " . $conn->error]);
}

$stmt->close();
$conn->close();
?>

