<?php
include('../Controller logic/emergencycontroller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>Emergency Directory</title>
    <link rel="stylesheet" href="../Stylesheets/emergencydirectory.css">
</head>
<body>
    <div class="sidebar">
        <h2>Features</h2>
        <a href="places.php">Nearby Places to Visit</a>
        <a href="calculator.php">Cost Calculator</a>    
        <a href="tripnotes.php">My Notes</a>
        <a href="feedback.php">Feedback</a>
        <a href="emergencydirectory.php">Emergency Helplines</a>
        <a href="logout.php">Logout</a>
    </div>    
    <div class="main-content">
        <h1>Emergency Helplines</h1>
        <p>Quick access to essential service numbers for your safety during rides.</p>

    <div class="form-section">
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $editData['id'] ?? ''; ?>">

            <input type="text" name="service_name" placeholder="Service Name" value="<?php echo $editData['service_name'] ?? ''; ?>" required>
            <input type="text" name="contact_number" placeholder="Contact Number" value="<?php echo $editData['contact_number'] ?? ''; ?>" required>
            <input type="text" name="availability" placeholder="Availability" value="<?php echo $editData['availability'] ?? ''; ?>" required>

            <?php if ($editData): ?>
                <button type="submit" name="update">Update</button>
                <a href ="emergencydirectory.php"><button type="button">Cancel</button></a>
            <?php else: ?>
                <button type="submit" name="add">Add</button>
            <?php endif; ?>
        </form>
        <p><?php echo $success; ?></p>
        <p><?php echo $error; ?></p>
    </div>
    <div class="table-container">
        <table class="emergency-table">
            <thead>
                <tr>
                    <th>Service Name</th>
                    <th>Contact Number</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($conn, "SELECT * FROM emergency_contacts");
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['service_name']; ?></td>
                    <td class="num"><?php echo $row['contact_number']; ?></td>
                    <td><?php echo $row['availability']; ?></td>
                    <td>
                        <a href="?edit=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this contact?');">Delete</a>
                    </td>
                </tr>
                <?php 
                } 
                ?>
            </tbody>
        </table>
    </div>
    </div>
</body>  
</html> 