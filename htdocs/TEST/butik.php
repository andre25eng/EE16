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
            <h1>Butik</h1>
        </header>
        <main>
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
                <img src="Chocolate.png" alt="Chocolate Pocky" width="100px"><br>
                <input id="antalC" type="number" value="0" name="antalC" min="0"><br>
                <img src="Strawberry.png" alt="Strawberry Pocky" width="100px"><br>
                <input id="antalS" type="number" value="0" name="antalS" min="0"><br>
                <button id="bestall">Kassa</button>
            </form>
        </main>
    </div>
</body>
</html>