<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'abc_school';

$conn = mysqli_connect($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

mysqli_select_db($conn, $db);
?>