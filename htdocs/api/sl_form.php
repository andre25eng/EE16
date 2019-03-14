<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SL stationer</title>
    <link rel="stylesheet" href="sl.css">
</head>
<body>
    <form action="#" method="post">
        <label>Ange lat</label><input type="text" name="lat">
        <label>Ange lon</label><input type="text" name="lon">
        <button>Sök</button>
    </form>
    <?php
        if (isset($_POST["lat"]) && isset($_POST["lon"])) {
            $lat = filter_input(INPUT_POST, "lat", FILTER_SANITIZE_STRING);
            $lon = filter_input(INPUT_POST, "lon", FILTER_SANITIZE_STRING);

            $api = "5a04359da47042b7837f88a5c61908c9";
            $radius = "750";
            $max = "10";
            $url = "http://api.sl.se/api2/nearbystops.json?key=$api&originCoordLat=$lat&originCoordLong=$lon&maxresults=$max&radius=$radius";

            $json = file_get_contents($url);
            $jsonData = json_decode($json);
            $stopLocation = $jsonData->LocationList->StopLocation;

            echo "<table><tr><th>Närmaste stationerna till dig</th></tr>";
            foreach ($stopLocation as $stop) {
                $name = $stop->name;
                $lat = $stop->lat;
                $lon = $stop->lon;
                echo "<tr><td>$name: $lat, $lon</td></tr>";
            }
            echo "</table>";
        } else {
            echo "smothing wong!";
        }
    ?>
</body>
</html>