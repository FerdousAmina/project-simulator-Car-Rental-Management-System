<?php
include "../Model files/driverdb.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM driver WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $nid = $_POST['nid'];
    $age = $_POST['age'];
    
    $conn->query("UPDATE driver SET name='$name', phone='$phone', nid='$nid', age='$age' WHERE id=$id");
    header("Location: ../View files/Drivers Information.php");
    exit();
}
?>