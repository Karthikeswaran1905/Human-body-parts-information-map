<?php
// db.php
$conn = new mysqli("localhost", "root", "", "bodyparts");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Optional: Set charset to ensure proper rendering of special characters
$conn->set_charset("utf8mb4");
?>