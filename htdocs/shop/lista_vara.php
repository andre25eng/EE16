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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Alla varor</h1>
            <div id="korglook">
                <span id="antalVaror">0</span>
                <span id="korgen">0</span> kr
            </div>
        </header>
        <main>
        <?php
        /* öppna textfilen och läas inehållet och skriva ut det. */

        $allaRader = file("varbes.txt");

        /* loopa igenom rad för rad */
        foreach ($allaRader as $rad) {

        $delar = explode("¤", $rad);

        echo "
        <div class=\"vara\">\n
        <img src=\"./varor/$delar[2]\" alt=\"$delar[0]\">\n
        <p>$delar[0]</p>\n
        <p>Styckpris: <span id=\"pris\">$delar[1]</span> kr</p>\n
        <p>Summa: <span id=\"summa\">$delar[1]</span> kr</p>\n
            <table>
                <tr>
                    <td id=\"antal\" rowspan=\"2\">1</td>
                    <td id=\"plus\">+</td>
                    <td id=\"kop\" rowspan=\"2\">köp</td>
                </tr>
                <tr>
                    <td id=\"minus\">-</td>
                </tr>
            </table>
        </div>\n";
        }

        ?>
        </main>
        <footer>
                
        </footer>
    </div>
    <script src="script2.js"></script>
</body>
</html>