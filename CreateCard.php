<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systemdesignproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => $conn->connect_error]));
}

$BoardID = intval($_POST["BoardID"]);
$CardName = mysqli_real_escape_string($conn, $_POST["cardName"]);
$CardDescription = mysqli_real_escape_string($conn, $_POST["cardDescription"]);
$USERNAME = $_SESSION["USERNAME"] ?? "guest";  // adjust if you store username differently

$sql = "INSERT INTO card (BoardID, USERNAME, CardName, CardDescription)
        VALUES ($BoardID, '$USERNAME', '$CardName', '$CardDescription')";

if ($conn->query($sql) === TRUE) {
    echo json_encode([
        "status"  => "success",
        "CardID"  => $conn->insert_id,
        "message" => "Card created successfully"
    ]);
} else {
    echo json_encode([
        "status"  => "error",
        "message" => $conn->error
    ]);
}

$conn->close();
?>
