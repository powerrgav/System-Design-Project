<?php
header('Content-Type: application/json');
session_start();

$conn = new mysqli("localhost","root","","systemdesignproject");

if (!isset($_SESSION['username'])) {
    echo json_encode(["success"=>false]);
    exit;
}

$CardID = intval($_POST['CardID']);
$username = $_SESSION['username'];

$conn->query("DELETE FROM list WHERE CardID=$CardID");
$conn->query("DELETE FROM card WHERE CardID=$CardID AND username='$username'");

echo json_encode(["success"=>true]);
