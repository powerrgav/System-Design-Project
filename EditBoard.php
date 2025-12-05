<?php
session_start();
header("Content-Type: application/json");


if (!isset($_SESSION["username"])) {
    echo json_encode(["success" => false, "message" => "Not logged in"]);
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "DB connection failed"]);
    exit;
}

$BoardID = intval($_POST["BoardID"]);
$boardName = $_POST["boardName"];
$privacy = $_POST["boardPrivacy"];
$user = $_SESSION["username"];

// Convert textual privacy value to numeric (for tinyint)
$privacyValue = (strtolower($privacy) === 'private') ? 1 : 0;

// Update only the user's own board
$stmt = $conn->prepare(
    "UPDATE board SET BoardName=?, BoardPrivacy=? WHERE BoardID=? AND Username=?"
);
$stmt->bind_param("ssis", $boardName, $privacyValue, $BoardID, $user);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Board updated"]);
} else {
    echo json_encode(["success" => false, "message" => "Update failed"]);
}

$stmt->close();
$conn->close();
?>
