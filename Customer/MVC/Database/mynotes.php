<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "My_Notes";
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}