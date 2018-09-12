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
        $sordet = $_POST["sordet"];
        $nordet = $_POST["nordet"];

        $gamlaSidan = file_get_contents($url);
        $nyaSida = "";
        $antal = 1;
        $start = 0;
        $slut = 1;

        while ($slut != false) {
            $slut = stripos($gamlaSidan, $sordet, $start + 1);
            $nyaSida = $nyaSida . substr($gamlaSidan, $start, $slut) . $nordet;
            $antal++;
            $start = $slut + strlen($sordet);
        }
        
        file_put_contents("test.html", $nyaSida);

        echo "<p>$sordet hittades $antal gånger på sidan.</p>";
    ?>
</body>
</html>