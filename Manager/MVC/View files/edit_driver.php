<?php 
include "../Controller logic/edit_controller.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Driver</title>
    <link rel="stylesheet" href="../Stylesheets/edit_driver.css">
    <script src="../JavaScript files/addvalidation.js"></script>
</head>
<body>
    <h2>Update Driver Information</h2>
    
    <form action="../Controller logic/edit_controller.php?id=<?php echo $row['id']; ?>" method="post" onsubmit="return validateForm()">
        
         Name<br>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br><br>
        
         Phone Number<br>
        <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
        
         NID<br>
        <input type="text" id="nid" name="nid" value="<?php echo $row['nid']; ?>"><br><br>
        
         Age<br>
        <input type="number" id="age" name="age" value="<?php echo $row['age']; ?>"><br><br>
        
        <a href="Drivers Information.php"class="cancel-btn">Cancel</a>
        <input type="submit" value="Update">
        
    </form>
</body>
</html>