<?php 
include "../Controller logic/CarController.php";
$cars = getAllCars($conn); 
?>

<!DOCTYPE html>
<html>
<head>
<title> CARS </title>
<link rel="stylesheet" href="../Stylesheets/carhome.css">
</head>
<body>
    <div class="header-section">
    <h2>Available Cars</h2>
    <a href="add_car_view.php" class="btn-primary"> Add New Car</a>
    </div>
    
    
    <div class="car-container" id="carList">
    
    <?php 
      
        if ($cars->num_rows > 0):
        while ($row = $cars->fetch_assoc()): 
    ?>
    <div class="car-card" id="card-<?php echo $row['id']; ?>">
    <img src="../Images/<?php echo $row['image']; ?>" alt="Car Image">
    <div class="car-info">
    <h3><?php echo $row['model']; ?></h3>
    <p>Rent: $<?php echo $row['rent_cost']; ?>/day</p>
    <div class="actions">
    <a href="edit_car.php?id=<?php echo $row['id']; ?>" class="update-btn">Update</a>
    <button onclick="deleteCar(<?php echo $row['id']; ?>)" class="delete-btn">Delete</button>
    </div>
    </div>
    </div>
    <?php 
        endwhile; 
        else:
        echo "<p>No cars available.</p>";
        endif;
        ?>
    </div>

<script>
 function deleteCar(id)
 {
    if(confirm('Are you Sure'))
    {
        let xhttp =new XMLHttpRequest();
        xhttp.open("POST","../Controller logic/CarController.php",true);
        xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhttp.onreadystatechange =function()
        {
            if (this.readyState == 4 && this.status ==200)
        {
            if(this.responseText.trim()=="success")
        {
            document.getElementById('card-'+id).remove();

         }
        }
        };
        xhttp.send("delete_id="+id);

    }
 }

</script>

</body>
</html>
