<?php
include('../Database/myplaces.php');

$success = $error = "";
$places_data = [];

$query = "SELECT * FROM nearby_places ORDER BY district ASC";
$result = mysqli_query($conn, $query);


if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $places_data[$row['district']][]= $row;
    }
}
    else {
    $error = "Failed to fetch data: " . mysqli_error($conn);
    }
?>    