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
        <input type="number" id="kmInput" oninput="calculateFuel()" placeholder="e.g. 100"><br>

        Fuel Type:
        <select id="fuelType" onchange="calculateFuel()">
            <option value="Octane">Octane</option>
            <option value="Diesel">Diesel</option>
            <option value="Petrol">Petrol</option>
        </select>
    </div>

    <div id="fuelResult" class="result-box">
        <strong id="totalCost"></strong>
        <p id="fuelNeeded"></p>
    </div>
</div>