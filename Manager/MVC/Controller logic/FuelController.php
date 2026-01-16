<?php
header('Content-Type: application/json');
$fuelPrices = [
    "Octane" => 130, 
    "Diesel" => 106,
    "Petrol" => 125,
    "Mileage_Avg" => 10
];

echo json_encode($fuelPrices); 
exit;
?>