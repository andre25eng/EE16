<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    /* ta emot */
    $temp = $_POST["temp"];
    $omvandla = $_POST["omvandla"];
    echo "$temp $omvandla";

    if ($omvandla == 'f2c') {
        $_celsius = ($temp - 32) * 5/9;
        echo"<p>Temperatur är $_celsius i Celsius</p>";
    } else {
        $_farenheit = 9/5 *$temp + 32;
        echo"<p>Temperatur är $_farenheit i Farenheit</p>";
    }
    ?>
</body>
</html>