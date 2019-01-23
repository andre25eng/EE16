<?php
/*
* PHP version 7
* @category   Pocky Webbshop
* @author     André Englund, Bat Erden, Lukas Gredin
* @license    PHP CC
*/
?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Pocky Sthlm</title>
    <link rel="icon" href="Pictures/favicon.png">
    <link rel="stylesheet" id="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <div class="hdiv">
            <div class="flex1"><img src="Pictures/pockylogo.png" alt="Pocky logo"></div>
            <nav class="flex2">
                <ul>
                    <li><a href="pockysthlm1.html">Hem</a></li>
                    <li><a href="pockysthlm2.html">Nyheter</a></li>
                    <li><a href="pockysthlm3.html">Om oss</a></li>
                    <li class="curent"><a href="pockysthlm4.php">Butik</a></li>
                </ul>
            </nav>
            <div class="flex1"><div id="kassaButtonKontainer"><a id="kassaButton" href="pockykassa.php">Kassa</a></div></div>
        </div>
    </header>
    <div class="maindiv">
        <main>
<!--        <div>
                <h1 class="h">Tillgänglighet</h1>
                <p>Nästa köpes tillfälle: Obekräftat</p>
                <p>Status: Inväntar Leverans</p>
                <p><img src="Pictures/out-of-stock.png" alt="Out of stock"></p>
            </div>
-->
            <div id="dash">
                <h1 class="h">Vilka Pocky smaker har vi?</h1>
                <p>Chocolate</p>
                <p><img src="Pack\Chocolate.png" alt="Chocolate Pocky" class="Pockypic"></p>
                <table class="kontroll">
                    <tr>
                        <td id="antal" rowspan="2">1</td>
                        <td id="plus">+</td>
                        <td id="kop" onclick="" rowspan="2">köp</td>
                    </tr>
                    <tr>
                        <td id="minus">-</td>
                    </tr>
                </table><br>
            
                <p>Strawberry</p>
                <p><img src="Pack\Pocky_Strawberry.png" alt="Jordgubbs Pocky" class="Pockypic"></p>
                <table class="kontroll">
                    <tr>
                        <td id="antal" rowspan="2">1</td>
                        <td id="plus">+</td>
                        <td id="kop" onclick="" rowspan="2">köp</td>
                    </tr>
                    <tr>
                        <td id="minus">-</td>
                    </tr>
                </table>
            </div>     
        </main>
    </div>
    <footer>
        <h2>Kontakta oss</h2>
        <p><a href="mailto:pocky4sthlm@gmail.com" target="_top">pocky4sthlm@gmail.com</a></p>
    </footer>
    <script src="script2.js"></script>
</body>
</html>