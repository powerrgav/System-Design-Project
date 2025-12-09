<?php
header('Content-Type: application/json');
session_start();

$conn = new mysqli("localhost","root","","systemdesignproject");

if (!isset($_SESSION['username'])) {
    echo json_encode(["success"=>false,"message"=>"Not logged in"]);
    exit;
}

$BoardID = intval($_POST['BoardID']);
$username = $_SESSION['username'];

/* Delete order matters if you use FK constraints */
$conn->query("DELETE FROM list WHERE CardID IN (SELECT CardID FROM card WHERE BoardID=$BoardID)");
$conn->query("DELETE FROM card WHERE BoardID=$BoardID AND username='$username'");
$conn->query("DELETE FROM board WHERE BoardID=$BoardID AND username='$username'");

echo json_encode(["success"=>true]);
