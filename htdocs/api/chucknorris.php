<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Norris Jokes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $json = file_get_contents("https://api.chucknorris.io/jokes/random");

        $jsonData = json_decode($json);

        $joke = $jsonData->value;

        echo "<p>$joke</p>";
    ?>
</body>
</html>