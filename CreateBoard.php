<?php
session_start();

if (!isset($_SESSION["username"])) {
    die("Not logged in.");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $conn->real_escape_string($_SESSION["username"]);
$boardName = $conn->real_escape_string($_POST["boardName"]);
$boardPrivacy = isset($_POST["boardPrivacy"]) ? $_POST["boardPrivacy"] : "Public";
$boardColor = "#ffffff"; // default color

// Convert textual privacy value to numeric (for tinyint)
$privacyValue = (strtolower($boardPrivacy) === 'private') ? 1 : 0;

// ✅ Use $privacyValue in the SQL query, NOT $boardPrivacy
$sql = "INSERT INTO board (username, BoardName, BoardPrivacy, BoardColor)
        VALUES ('$user', '$boardName', $privacyValue, '$boardColor')";

if ($conn->query($sql) === TRUE) {
    echo json_encode([
        "success" => true,
        "BoardID" => $conn->insert_id,
        "message" => "Board '$boardName' created for '$user'."
    ]);
} else {
    echo json_encode([
        "success" => false,
        "error" => $conn->error
    ]);
}

$conn->close();
?>