<?php
$conn = new mysqli("localhost", "root", "", "user_system");
if ($conn->connect_error) {
    die("Connection dropped: " . $conn->connect_error);
}
?>