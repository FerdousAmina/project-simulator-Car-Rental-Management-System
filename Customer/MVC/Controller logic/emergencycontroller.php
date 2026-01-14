<?php
include('../Database/emergencyinfo.php');

$success = $error = "";

if (isset($_POST['add'])){
    $service_name = $_POST['service_name'];
    $contact_number = $_POST['contact_number'];
    $availability = $_POST['availability'];

    $sql = "INSERT INTO emergency_contacts (service_name, contact_number, availability)
            VALUES ('$service_name', '$contact_number', '$availability')";

            if (mysqli_query($conn, $sql)) {
                $success = "Added successfully!";
            } else {
                $error = mysqli_error($conn);
            }
}