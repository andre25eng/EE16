<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sök på iTunes API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $api = "22ee1d58f7adae08ee71fa7c0bd24481";
        $json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Tokyo&APPID=$api&units=metric");
        
        print_r($json);

        $jsonData = json_decode($json);

        $coord = $jsonData->coord;
        $lat = $coord->lat;
        $lon = $coord->lon;

        $temp = $jsonData->main->temp;

        $icon = $jsonData->weather[0]->icon . ".png";

        echo "<p>Tokyo ligger på latitude $lat och longgetude $lon.</p>";
        echo "<p>Det är $temp&deg;C i Tokyo.</p>";
        echo "<img src=\"https://openweathermap.org/img/w/$icon\" alt=\"Väderbild\"";
        
    ?>
</body>
</html>