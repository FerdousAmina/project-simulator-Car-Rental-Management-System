<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Drivers_information";

$conn = new mysquli($host,$user,$pass,$dbname);

if ($conn->connect_error)
    {
        die("Connection Fail: ". $conn->connect_error);
    }
?>