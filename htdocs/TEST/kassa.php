<?php 
session_start();
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
    <div class="kontainer listaVara">
        <header>
            <h1>Kassa</h1>
        </header>
        <main>
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
                        echo "<form action=\"bestall.php\" method=\"post\">
                        <input name=\"antalC\" type=\"hidden\" value=\"$antalC\" readonly>
                        <input name=\"antalS\" type=\"hidden\" value=\"$antalS\" readonly>
                        <input name=\"total\" type=\"text\" value=\"$total\" readonly>
                        <input name=\"totalPrice\" type=\"text\" value=\"$totalPrice kr\" readonly>
                        <button>Slutför Beställning</button>
                        </form>";
                    }
                } else {
                    header("Location: butik.php");
                    exit;
                }
            ?>


            
        </main>
    </div>
</body>
</html>