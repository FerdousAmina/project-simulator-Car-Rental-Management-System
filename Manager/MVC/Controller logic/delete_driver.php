<?php
include "../Model files/driverdb.php";

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM driver WHERE id=$id");
    header("Location: ../View files/Drivers Information.php");
    exit();
}
?>