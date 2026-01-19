<?php
session_start();
include('../Database/myexpenses.php');

$success = $error = "";
$current_user = $_SESSION['username'];
$editData = null;

if (isset($_POST['add'])){
    $title = $_POST['title'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO expenses (username, title, cost)
            VALUES ('$current_user', '$title', '$cost')";
            if (mysqli_query($conn, $sql)) {
                $success = "Added successfully!";
            } else {
                $error = mysqli_error($conn);
            }
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM expenses WHERE id=$id AND username='$current_user'");
    header("Location: ../View Files/expense.php");
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $cost = $_POST['cost'];

    $sql = "UPDATE expenses SET title='$title', cost='$cost' WHERE id=$id AND username='$current_user'";

    if (mysqli_query($conn, $sql)) {
        $success = "Updated successfully!";
    } else {
        $error = mysqli_error($conn);
    }
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM expenses WHERE id=$id AND username='$current_user'");
    $editData = mysqli_fetch_assoc($result);
}
?>