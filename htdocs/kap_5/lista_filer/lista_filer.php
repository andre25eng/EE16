<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista alla filer i en katalog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $sokvag = "C:\Users\andre\Pictures\WP";

    $filer = scandir($sokvag);

    foreach ($filer as $fil) {
        if ($fil != "." && $fil != "..") {
        echo "<p>$fil</p>";
        }
    }
    ?>
</body>
</html>