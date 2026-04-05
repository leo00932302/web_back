<?php
$host = "db";   // 重要：這是 docker service 名稱
$user = "root";
$pass = "root";
$db   = "testdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
