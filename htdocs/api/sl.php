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

        $stops = [];
        foreach ($stopLocation as $stop) {
            $name = $stop->name;
            $lat = $stop->lat;
            $lon = $stop->lon;
            $stops[] = [$name, $lat, $lon];
        }
        echo json_encode($stops);
    } else {
        echo "smothing wong!";
    }