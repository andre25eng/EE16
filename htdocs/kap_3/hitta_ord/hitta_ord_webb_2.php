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

        $nyaSida = str_replace($sordet, $nordet, $gamlaSidan);
        
        file_put_contents("test.html", $nyaSida);
    ?>
</body>
</html>