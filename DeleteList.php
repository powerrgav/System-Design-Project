<?php
header('Content-Type: application/json');
session_start();

$conn = new mysqli("localhost","root","","systemdesignproject");

if (!isset($_SESSION['username'])) {
    echo json_encode(["success"=>false]);
    exit;
}

$ListID = intval($_POST['ListID']);
$username = $_SESSION['username'];

$conn->query("DELETE FROM list WHERE ListID=$ListID AND username='$username'");

echo json_encode(["success"=>true]);
