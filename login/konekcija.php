<?php
$conn = mysqli_connect("localhost", "root", "kristijan", "iir")or die("Connection Failed");
#$conn = mysqli_connect("localhost", "iir_user", "nCl4bVN4tVI7", "iir")or die("Connection Failed");
mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>