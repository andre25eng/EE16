<?php
/*
* PHP version 7
* @category   Webbshop
* @author     André Englund
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Alla varor</h1>
        <main>
        <?php
        /* öppna textfilen och läas inehållet och skriva ut det. */

        $allaRader = file("varbes.txt");

        /* loopa igenom rad för rad */
        foreach ($allaRader as $rad) {

        $delar = explode("¤", $rad);

        echo "<div class=\"vara\">\n
              <img src=\"./varor/$delar[2]\" alt=\"$delar[0]\">\n
              <p>$delar[0]</p>\n
              <p>$delar[1] kr</p>\n
              <hr>\n
              </div>\n";
        }

        ?>
        </main>
        <footer>
    
        </footer>
    </div>
</body>
</html>