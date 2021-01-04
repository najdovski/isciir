<?php
$conn = mysqli_connect("localhost", "root", "", "isciir") or die("Connection Failed");
mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>