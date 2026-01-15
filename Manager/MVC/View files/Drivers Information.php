<?php include "../Model files/driverdb.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Driver Management</title>
    <link rel="stylesheet" href="../Stylesheets/driverinfo.css">
</head>
<body>
    <h2>Driver List</h2>
    <a href="Manager dashboard.php" class="back-link"><button type="button">Back</button></a>

    <div class="add-link">
   <a href="add_driver.php" ><button>Add New Driver</button></a>
   </div><br><br>
    
    <table class="driver-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>NID</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM driver");
        while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['nid']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td>
                <a href="edit_driver.php?id=<?php echo $row['id']; ?>">Update</a> | 
                <a href="../Controller logic/delete_driver.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>