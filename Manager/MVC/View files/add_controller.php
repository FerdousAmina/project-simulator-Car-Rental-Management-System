<!DOCTYPE html>
<html>
<head>
    <title>Add driver</title>
</head>
<body>
    <form id="driverForm" method="post" action="../Controller logic/add_controller.php" onsubmit="return validateForm()">
    <h1> Add New Driver </h2>
    Name:<input type="text" id="name" name="name"><br><br>
    Phone:<input type="text" id="phone" name="phone"><br><br>
    nid:<input type="text" id="nid" name="nid"><br><br>
    Age:<input type="number" id="age" name="age"><br><br>

    <input type="submit" value="Submit">
    <a href="Drivers Information.php">Back</a>
</form>
   <script src="../JavaScript files/validation.js"></script>
</body>
</html>