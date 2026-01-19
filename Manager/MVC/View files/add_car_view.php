<!DOCTYPE html>
<html>
<head>
    <title>Add New Car</title>
    <link rel="stylesheet" href="../Stylesheets/add_cars.css">
</head>
<body>
    <div class="form-container">
        <h2>Insert New Car Details</h2>
        <form id="addCarForm" enctype="multipart/form-data">
            <div class="input-group">
                <label>Car Model:</label>
                <input type="text" name="model" required>

                 <label>Rent Cost:</label>
                 <input type="number" name="rent_cost" required>
           
                <label>Car Image:</label>
                <input type="file" name="image" accept="image/*" required>
            </div>
            
            <input type="hidden" name="add_car" value="1">
            <button type="submit" class="btn-primary">Submit Car Information</button>
            <a href="car_management.php" class="btn-secondary">Back to List</a>
        </form>
    </div>

    <script src="../JavaScript files/add_car_validation.js"></script>
</body>
</html>