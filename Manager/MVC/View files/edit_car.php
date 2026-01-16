<?php 
include "../Controller logic/CarController.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM cars WHERE id = $id");
    $car = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
    <link rel="stylesheet" href="../Stylesheets/edit_car.css">
</head>
<body>
    <div class="form-container">
    <h2>Update Car Details</h2>
    <form id="editCarForm" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
            
    <div class="input-group">
                <label>Car Model:</label>
                <input type="text" name="model" value="<?php echo $car['model']; ?>" required>
            </div>
            
            <div class="input-group">
                <label>Rent Cost:</label>
                <input type="number" name="rent_cost" value="<?php echo $car['rent_cost']; ?>" required>
            </div>
            
            <div class="input-group">
                <label>Current Image:</label><br>
                <img src="../uploads/<?php echo $car['image']; ?>" width="100" style="border-radius: 8px; margin: 10px 0;">
                <label>Change Image (Optional):</label>
                <input type="file" name="image" accept="image/*">
            </div>
            
            
            <button type="submit" class="btn-primary">Update Car</button>
            <a href="car_management.php" class="btn-secondary">Cancel</a>
        </form>
    </div>

    <script>
        document.getElementById('editCarForm').onsubmit = function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../Controller logic/CarController.php", true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText.trim() == "success") {
                        alert("Updated Successfully!");
                        window.location.href = "car_management.php";
                    }
                }
            };
            xhttp.send(formData);
        };
    </script>
</body>
</html>