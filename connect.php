<?php

$servername ="localhost:8080";
$username = "root";
$password = "";
$database = "dumplang";

$conn = mysqli_connect($servername, $username, $password, $database, 3306);

if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
