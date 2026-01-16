<?php
include('../Database/myplaces.php');

$success = $error = "";
$editData = null;

$query = "SELECT * FROM nearby_places ORDER BY place_name ASC";
$result = mysqli_query($conn, $query);

$places_data = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $places_data[] = $row;
    }
    else {
    $error = "Failed to fetch data: " . mysqli_error($conn);
    }
}
?>    