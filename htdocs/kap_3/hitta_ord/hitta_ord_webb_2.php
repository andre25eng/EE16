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
        $url = $_POST["url"];
        $sordet = $_POST["ordet"];

        $innehall = file_get_contents($url);
        $antal = 0;
        $pos = 1;

        while ($pos != false) {
            $pos = stripos($innehall, $sordet, $pos + 1);
            echo "<p>$pos</p>";
            $antal++;
        }
        $antal--;

        echo "<p>$sordet hittades $antal gånger på sidan.</p>";
    ?>
</body>
</html>