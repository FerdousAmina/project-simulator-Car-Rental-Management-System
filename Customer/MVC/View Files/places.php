<?php
include('../Controller logic/placescontroller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>Places</title>
    <link rel="stylesheet" href="../Stylesheets/places.css">
    <link rel="stylesheet" href="../Stylesheets/common.css">
    <link rel="stylesheet" href="../Stylesheets/back.css">
</head>
<body>
    <div class="sidebar">
        <a href="customerdashboard.php" class="back-btn">Back</a>
        <h2>Features</h2>
        <a href="places.php">Nearby Tourist Places</a>
        <a href="calculator.php">Cost Calculator</a>    
        <a href="tripnotes.php">My Notes</a>
        <a href="feedback.php">Feedback</a>
        <a href="emergencydirectory.php">Emergency Helplines</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="main-content">
        <h1>Nearby Tourist Places</h1>
        <p>Select a destination from the list below to discover amazing nearby tourist spots.</p>

        <div class="places-list">
            <div class="place-box">
                <label for="districtSelect"><strong>Choose a District!</strong></label><br><br>
                <select id="districtSelect" onchange="showDistrict()">
                    <option value=""> Select a District </option>

                    <?php foreach (array_keys($places_data) as $district):?>
                        <option value="<?php echo htmlspecialchars($district); ?>">
                            <?php echo htmlspecialchars($district); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div id="placesContainer"></div>
            </div>

            <div id= "detailsBox" class="hidden">
                <img id="displayImg" src="" alt="Place Image">
                <h2 id="displayName"></h2>
                <p id="displayDesc"></p>
                <a id="displayMapLink" href="" target="_blank">View on Google Map</a>
            </div>
            </div>
            <script>
                const places = <?php echo json_encode($places_data); ?>;
            </script>
            <script src="../Javascript/places.js"></script>    
            </body>
            </html>