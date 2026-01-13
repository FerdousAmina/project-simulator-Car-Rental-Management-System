<?php
include "../Model files/driverdb.php";

if (isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $conn->query("DELETE FROM drivers Where id=$id");
        header("Location: delete_driver.php");
    }

    $drivers = $conn->query("*SELECT * FROM drivers");

    include "../view files/Drivers Information.php";

?>