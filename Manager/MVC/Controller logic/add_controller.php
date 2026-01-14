<?php
include "../Model files/driverdb.php";

if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $name = $_POST['name'];
        $phone= $_POST['phone'];
        $nid = $_POST['nid'];
        $age = $_POST['age'];

        $conn->query ("INSERT INTO drivers (name,phone,nid,age) VALUES('$name','$phone','$nid','$age')");

        header("Location: add_controller.php");
        exit();
    }
    include "../view files/Drivers Information.php";
?>