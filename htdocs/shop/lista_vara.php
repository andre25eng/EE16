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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer listaVara">
        <header>
            <h1>Butik</h1>
            <nav>
                <a href="ny_vara.php">Ny Vara</a>
                <a href="login.php">Logga In</a>
                <a href="lista_vara.php">Handla</a>
            </nav>
            <h2>Alla Varor</h2>
            <form id="korg" method="post" action="kassa.php">
                <input id="antalVaror" type="text" value="0" name="antalVaror" readonly>
                <input id="total" type="text" value="0 kr" name="total" readonly>
                <input id="korgen" type="hidden" name="korgen" readonly>
                <button id="kassan" disabled>Kassan</button>
                <button id="tom" type="reset"><i class="fas fa-times"></i></button>
            </form>
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
        <p id=\"beskrivning\">$delar[0]</p>\n
        <p>Styckpris: <span id=\"pris\">$delar[1]</span> kr</p>\n
        <p>Summa: <span id=\"summa\">$delar[1]</span> kr</p>\n
            <table class=\"kontroll\">
                <tr>
                    <td id=\"antal\" rowspan=\"2\">1</td>
                    <td id=\"plus\">+</td>
                    <td id=\"kop\" onclick=\"\" rowspan=\"2\">köp</td>
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
            André Englund 2018
        </footer>
    </div>
    <script src="script2.js"></script>
</body>
</html>