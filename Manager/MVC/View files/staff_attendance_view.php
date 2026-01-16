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
<div id="attendanceHistory">
    <h3>Attendance Records</h3>
    <div id="recordList">
    <?php while($row = $records->fetch_assoc()): ?>
    <div class="record-card">
    <strong>Name: <?php echo htmlspecialchars($row['staff_name']); ?></strong><br>
    <span class="bdt-time">Logged on: <?php echo date('d/m/Y, h:i A', strtotime($row['log_date'])); ?> BDT</span><br>
    In: <?php echo date('h:i A', strtotime($row['check_in'])); ?> | 
    Out: <?php echo $row['check_out'] ? date('h:i A', strtotime($row['check_out'])) : "Pending"; ?>
</div>
    <?php endwhile; ?>
    </div>
    </div>
    </div>
</body>
</html>
