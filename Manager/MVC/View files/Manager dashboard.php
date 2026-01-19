<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location:../View files/login.php");
    exit();
}
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Dashboard</title>
    <link rel="stylesheet" href="../stylesheets/Manager dashboard.css">
</head>
<body>

<div class="sidebar">
    <h1>Features</h1>
    <a href="Notice Board Management.php">Notice</a>
    <a href="Drivers Information.php">Drivers</a>
    <a href="car_management.php">Import Car</a>
    <a href="staff_attendance_view.php">Staff Attandence</a>
    <a href="fuel_view.php">Fuel Calculator</a>
    <a href="Logout.php">Logout</a>
    
</div>
<script>
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload(); 
        }
    };
</script>
</body>
</html>