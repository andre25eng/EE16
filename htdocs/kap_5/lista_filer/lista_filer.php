<?php
/*
*Läser innehållet av mappen bilder och skapar ett bildgaleri av befintliga filer.
* PHP version 7
* @category   Bildgalleri
* @author     André Englund
* @license    PHP CC
*/
?>
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
    $sokvag = "./bilder";
    $filer = scandir($sokvag);

    echo "<div clas=\"kontainer\">\n";
    echo "<h1>Bildgaleleri</h1>\n";

    foreach ($filer as $fil) {
        if ($fil != "." && $fil != "..") {
        echo "<div class=\"ros\">\n
            <img class=\"ram vanster\"src=\"./bilder/$fil\" alt=\"stuff\">\n
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>\n
            <hr>\n
            </div>\n";
        }
    }
    echo "</div>";
    ?>
</body>
</html>