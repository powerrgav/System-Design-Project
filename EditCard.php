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

$CardID = isset($_POST['CardID']) ? intval($_POST['CardID']) : 0;
$CardName = $_POST['cardName'] ?? '';
$CardDescription = $_POST['cardDescription'] ?? '';
$CardColor = $_POST['cardColor'] ?? '#FFFFFF';
$Username = $_SESSION['username'];

if ($CardID <= 0) {
    echo json_encode(["success" => false, "message" => "Missing or invalid CardID"]);
    exit;
}

$stmt = $conn->prepare("
    UPDATE card
    SET CardName = ?, CardDescription = ?, CardColor = ?
    WHERE CardID = ? AND username = ?
");

$stmt->bind_param("sssis", $CardName, $CardDescription, $CardColor, $CardID, $Username);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo json_encode(["success" => true, "message" => "Card updated"]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "No changes — card may not belong to this user"
    ]);
}

$stmt->close();
$conn->close();
?>


