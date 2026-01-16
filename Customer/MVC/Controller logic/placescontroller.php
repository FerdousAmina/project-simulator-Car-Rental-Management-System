<?php
include('../Database/myplaces.php');

$success = $error = "";
$editData = null;

if (isset($_POST['add'])){
    $place_name = $_POST['place_name'];
    $description = $_POST['description'];
    $location_url = $_POST['location_url'];
    $image_path = $_POST['image_path'];

    $sql = "INSERT INTO nearby_places (place_name, description, location_url, image_path)
            VALUES ('$place_name', '$description', '$location_url', '$image_path')";
            if (mysqli_query($conn, $sql)) {
                $success = "Added successfully!";
            } else {
                $error = mysqli_error($conn);
            }
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM nearby_places WHERE id=$id");
    header("Location: ../View Files/places.php");
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $place_name = $_POST['place_name'];
    $description = $_POST['description'];
    $location_url = $_POST['location_url'];
    $image_path = $_POST['image_path'];

    $sql = "UPDATE nearby_places SET place_name='$place_name', description='$description', location_url='$location_url', image_path='$image_path' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        $success = "Updated successfully!";
    } else {
        $error = mysqli_error($conn);
    }
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM nearby_places WHERE id=$id");
    $editData = mysqli_fetch_assoc($result);
}
?>    