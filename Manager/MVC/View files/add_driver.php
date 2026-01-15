<!DOCTYPE html>
<html>
<head>
    <title>Add Driver</title>
    <link rel="stylesheet" href="../Stylesheets/add_driver.css">
    <script src="../JavaScript files/addvalidation.js"></script>
</head>
<body>
    <h2>Add New Driver</h2>
    <form action="../Controller logic/add_controller.php" method="post" onsubmit="return validateForm()">
        Name<br>
        <input type="text" id="name" name="name"><br><br>
        Phone<br>
        <input type="text" id="phone" name="phone"><br><br>
        NID<br>
        <input type="text" id="nid" name="nid"><br><br>
        Age<br> 
        <input type="number" id="age" name="age"><br><br>
        
        <a href="Drivers Information.php"class="back-btn">Back</a>
        <input type="submit" value="Submit">
    </form>
</body>
</html>