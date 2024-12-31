<?php
$latitude = $_GET['lat'] ?? 0;
$longitude = $_GET['lng'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación del Sensor</title>
    <style>
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script>
        function initMap() {
            const location = { lat: parseFloat("<?= $latitude ?>"), lng: parseFloat("<?= $longitude ?>") };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: location,
            });

            new google.maps.Marker({
                position: location,
                map: map,
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBol5qVgsckP561gyJ2ZmOwq4JOF4ZSKhA&callback=initMap" async defer></script>
</body>
</html>
