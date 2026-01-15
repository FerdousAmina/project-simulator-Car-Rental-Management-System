<?php
include('../Database/mynotes.php');

$success = $error = "";
$editData = null;

if (isset($_POST['add'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO trip_notes (title, content)
            VALUES ('$title', '$content')";
            if (mysqli_query($conn, $sql)) {
                $success = "Added successfully!";
            } else {
                $error = mysqli_error($conn);
            }
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM trip_notes WHERE id=$id");
    header("Location: ../View Files/mynotes.php");
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE trip_notes SET title='$title', content='$content' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        $success = "Updated successfully!";
    } else {
        $error = mysqli_error($conn);
    }
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM trip_notes WHERE id=$id");
    $editData = mysqli_fetch_assoc($result);
}
?>