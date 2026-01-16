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