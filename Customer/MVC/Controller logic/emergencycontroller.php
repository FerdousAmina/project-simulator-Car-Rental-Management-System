<?php
session_start();
include('../Database/emergencyinfo.php');

$success = $error = "";
$current_user = $_SESSION['username'];
$editData = null;

if (isset($_POST['add'])){
    $service_name = $_POST['service_name'];
    $contact_number = $_POST['contact_number'];
    $availability = $_POST['availability'];

    $sql = "INSERT INTO emergency_contacts (username, service_name, contact_number, availability)
            VALUES ('$current_user', '$service_name', '$contact_number', '$availability')";

            if (mysqli_query($conn, $sql)) {
                $success = "Added successfully!";
            } else {
                $error = mysqli_error($conn);
            }
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM emergency_contacts WHERE id=$id AND username='$current_user'");
    header("Location: ../View Files/emergencydirectory.php");
    exit();
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $service_name = $_POST['service_name'];
    $contact_number = $_POST['contact_number'];
    $availability = $_POST['availability'];

    $sql = "UPDATE emergency_contacts SET service_name='$service_name', contact_number='$contact_number', availability='$availability' WHERE id=$id AND username='$current_user'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../View Files/emergencydirectory.php?updated=1");
        exit();
    } else {
        $error = mysqli_error($conn);
    }
}
$editData = null;
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM emergency_contacts WHERE id=$id AND username='$current_user'");
    $editData = mysqli_fetch_assoc($result);
}
?>