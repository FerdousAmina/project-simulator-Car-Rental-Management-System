<?php
include "../Model files/attdb.php";
date_default_timezone_set('Asia/Dhaka');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'save') {
    $name = $_POST['name'];
    $inTime = $_POST['inTime'];
    $outTime = $_POST['outTime'];
    $logDate = date('Y-m-d H:i:s');

    $sql = "INSERT INTO staff_attendance (staff_name, check_in, check_out, log_date) 
            VALUES ('$name', '$inTime', '$outTime', '$logDate')";
    
    if ($conn->query($sql)) {
        echo "success";
    } else {
        echo "Error: " . $conn->error;
    }
    exit;
}

function getAllRecords($conn) {
    return $conn->query("SELECT * FROM staff_attendance ORDER BY id DESC");
}
?>