<!DOCTYPE html>
<html>
<head>
    <title>Fuel Estimator</title>
    <link rel="stylesheet" href="../Stylesheets/fuel_style.css">
</head>
<body>

<div class="container fuel-card">
    <h3>Live Fuel Cost Estimator</h3>
    
    <div class="input-group">
        Total Distance (km):
        <input type="number" id="kmInput" placeholder="e.g. 100"><br>

        Fuel Type:
        <select id="fuelType">
            <option value="Octane">Octane</option>
            <option value="Diesel">Diesel</option>
            <option value="Petrol">Petrol</option>
        </select>
        <button type="button" id="submitBtn" onclick="calculateFuel()">Calculate Cost</button>
    </div>

    <div id="fuelResult" class="result-box">
        <strong id="totalCost"></strong>
        <p id="fuelNeeded"></p>
    </div>
</div>
<script>
function calculateFuel() {
    var km = document.getElementById("kmInput").value;
    var type = document.getElementById("fuelType").value;

    if (km === "" || km <= 0) {
        alert("Please enter a valid distance!");
        return;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            displayResult(this.responseText, km, type);
        }
    };
    
    xhttp.open("GET", "../Controller logic/FuelController.php", true);
    xhttp.send();

    function displayResult(responseText, km, type) {
        var data = JSON.parse(responseText);
        
        var liters = (km / data.Mileage_Avg).toFixed(2);
        var total = (liters * data[type]).toFixed(2);

        document.getElementById("fuelResult").style.display = "block";
        document.getElementById("totalCost").innerHTML = "Estimated Cost: " + total + " BDT";
        document.getElementById("fuelNeeded").innerHTML = "Fuel Needed: " + liters + " Liters";
    }
}
</script>
</body>
</html>
