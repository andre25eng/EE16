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
    <div class="kontainer listaVara">
        <header>
            <div class="hdiv">
                <div class="flex1"><img src="Pictures/pockylogo.png" alt="Pocky logo"></div>
                <nav class="flex2">
                    <ul>
                        <li><a href="pockysthlm1.html">Tillbaka till Pocky STHLM</a></li>
                    </ul>
                </nav>
                <div class="flex1"></div>
            </div>
        </header>
        <div class="maindiv">
            <main>
                <div id="dash">
                    <?php
                        if (isset($_POST["antalC"]) && isset($_POST["antalS"])) {
                            $antalC = filter_input(INPUT_POST, "antalC", FILTER_SANITIZE_NUMBER_INT);
                            $antalS = filter_input(INPUT_POST, "antalS", FILTER_SANITIZE_NUMBER_INT);

                            $total = $antalC + $antalS;
                            
                            echo "<h2>Din beställning</h2>";
                            echo "<p>Antal chocolad pocky $antalC st</p>";
                            echo "<p>Antal jordgubbs pocky $antalS st</p>";

                            if ($total < 2) {
                                $totalPrice = $total * 20;
                                echo "<form action=\"bestall.php\" method=\"post\">
                                <input name=\"antalC\" type=\"hidden\" value=\"$antalC\" readonly>
                                <input name=\"antalS\" type=\"hidden\" value=\"$antalS\" readonly>
                                <input name=\"total\" type=\"text\" value=\"$total\" readonly><br>
                                <input name=\"totalPrice\" type=\"text\" value=\"$totalPrice kr\" readonly><br>
                                <button>Slutför Beställning</button>
                                </form>";
                            }
                            if ($total == 2) {
                                $totalPrice = $total * 19;
                                echo "<form action=\"bestall.php\" method=\"post\">
                                <input name=\"antalC\" type=\"hidden\" value=\"$antalC\" readonly>
                                <input name=\"antalS\" type=\"hidden\" value=\"$antalS\" readonly>
                                <input name=\"total\" type=\"text\" value=\"$total\" readonly><br>
                                <input name=\"totalPrice\" type=\"text\" value=\"$totalPrice kr\" readonly><br>
                                <button>Slutför Beställning</button>
                                </form>";
                            }
                            if ($total > 2) {
                                $totalPrice = $total * 18;
                                echo "<form action=\"bestall.php\" method=\"post\">
                                <input name=\"antalC\" type=\"hidden\" value=\"$antalC\" readonly>
                                <input name=\"antalS\" type=\"hidden\" value=\"$antalS\" readonly>
                                <input name=\"total\" type=\"text\" value=\"$total\" readonly><br>
                                <input name=\"totalPrice\" type=\"text\" value=\"$totalPrice kr\" readonly><br>
                                <button>Slutför Beställning</button>
                                </form>";
                            }
                        } else {
                            header("Location: butik.php");
                            exit;
                        }
                    ?>
                </div>
            </main>
        </div>
    </div>
</body>
</html>