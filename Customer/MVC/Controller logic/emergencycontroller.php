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
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM emergency_contacts WHERE id=$id");
    header("Location: ../View Files/emergencydirectory.php");
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $service_name = $_POST['service_name'];
    $contact_number = $_POST['contact_number'];
    $availability = $_POST['availability'];

    $sql = "UPDATE emergency_contacts SET service_name='$service_name', contact_number='$contact_number', availability='$availability' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        $success = "Updated successfully!";
    } else {
        $error = mysqli_error($conn);
    }
}
$editData = null;
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM emergency_contacts WHERE id=$id");
    $editData = mysqli_fetch_assoc($result);
}
?>