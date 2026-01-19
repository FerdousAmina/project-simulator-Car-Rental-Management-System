<script>
        document.getElementById('addCarForm').onsubmit = function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            let xhttp = new XMLHttpRequest();
            xhttp.open("POST", "../Controller logic/CarController.php", true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText.trim() == "success") {
                        alert("Car Inserted Successfully!");
                        window.location.href = "car_management.php";
                    } else {
                        alert("Error: " + this.responseText);
                    }
                }
            };
            xhttp.send(formData);
        };
    </script>