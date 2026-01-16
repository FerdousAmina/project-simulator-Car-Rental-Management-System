<?php
session_start();
include('../Database/myfeedback.php');

$success = $error = "";
$current_user = $_SESSION['username'];
$editData = null;

if (isset($_POST['add'])){
    $about = $_POST['about'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedback_information (username, about, feedback)
            VALUES ('$current_user', '$about', '$feedback')";
            if (mysqli_query($conn, $sql)) {
                $success = "Added successfully!";
            } else {
                $error = mysqli_error($conn);
            }
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM feedback_information WHERE id=$id AND username='$current_user'");
    header("Location: ../View Files/feedback.php");
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $about = $_POST['about'];
    $feedback = $_POST['feedback'];

    $sql = "UPDATE feedback_information SET about='$about', feedback='$feedback' WHERE id=$id AND username='$current_user'";

    if (mysqli_query($conn, $sql)) {
        $success = "Updated successfully!";
    } else {
        $error = mysqli_error($conn);
    }
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM feedback_information WHERE id=$id AND username='$current_user'");
    $editData = mysqli_fetch_assoc($result);
}
?>