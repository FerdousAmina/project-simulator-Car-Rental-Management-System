<?php 
include "../Controller/StaffController.php"; 
$records = getAllRecords($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Staff Attendance </title>
</head>
<body>
<div class="container">
<div class="input-box">
    <h2>Record Attendance</h2>
<div class="input-group">
   Staff Name:<br>
  <input type="text" id="staffName" placeholder="Enter Name"><br><br>
   Check-in-time:<br>
  <input type="time" id="checkIn"><br><br>
   Check-out-time:<br>
  <input type="time" id="checkOut"><br><br>
  <button onclik="logAttendance()">Log Record</button>
</div>

</body>
</html>
