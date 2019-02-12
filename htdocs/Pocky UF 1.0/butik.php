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
                    <li class="curent"><a href="butik.php">Butik</a></li>
                </ul>
            </nav>
            <div class="flex1"></div>
        </div>
    </header>
    <div class="maindiv">
        <main>
<!--        
            <div>
                <h1 class="h">Tillgänglighet</h1>
                <p>Nästa köpes tillfälle: Obekräftat</p>
                <p>Status: Inväntar Leverans</p>
                <p><img src="Pictures/out-of-stock.png" alt="Out of stock"></p>
            </div>
-->
            <div id="dash">
                <h1 class="h">Vilka Pocky smaker har vi?</h1>
                <?php
                    if (isset($_POST["antalC"]) && isset($_POST["antalS"])) {
                        $antalC = filter_input(INPUT_POST, "antalC", FILTER_SANITIZE_NUMBER_INT);
                        $antalS = filter_input(INPUT_POST, "antalS", FILTER_SANITIZE_NUMBER_INT);

                        $total = $antalC + $antalS;
                        
                        if ($total < 2) {
                            $totalPrice = $total * 20;
                            echo "<input type=\"text\" value=\"$total\" readonly>";
                            echo "<input type=\"text\" value=\"$totalPrice kr\" readonly>";
                        }
                        if ($total == 2) {
                            $totalPrice = $total * 19;
                            echo "<input type=\"text\" value=\"$total\" readonly>";
                            echo "<input type=\"text\" value=\"$totalPrice kr\" readonly>";
                        }
                        if ($total > 2) {
                            $totalPrice = $total * 18;
                            echo "<input type=\"text\" value=\"$total\" readonly>";
                            echo "<input type=\"text\" value=\"$totalPrice kr\" readonly>";
                        }
                    }
                ?>
                <form id="korg" method="post" action="kassa.php">
                    <img src="Pack/Chocolate.png" alt="Chocolate Pocky"><br>
                    <input id="antalC" type="number" value="0" name="antalC" min="0"><br>
                    <img src="Pack/Strawberry.png" alt="Strawberry Pocky"><br>
                    <input id="antalS" type="number" value="0" name="antalS" min="0"><br>
                    <button id="bestall">Kassa</button>
                </form>
            </div>     
        </main>
    </div>
    <footer>
        <h2>Kontakta oss</h2>
        <p><a href="mailto:pocky4sthlm@gmail.com" target="_top">pocky4sthlm@gmail.com</a></p>
    </footer>
</body>
</html>