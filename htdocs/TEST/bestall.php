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
            <h1></h1>
        </header>
        <main>
            <?php
                if (isset($_POST["antalC"]) && isset($_POST["antalS"]) && isset($_POST["total"]) && isset($_POST["totalPrice"])) {
                    $antalC = filter_input(INPUT_POST, "antalC", FILTER_SANITIZE_NUMBER_INT);
                    $antalS = filter_input(INPUT_POST, "antalS", FILTER_SANITIZE_NUMBER_INT);
                    $total = filter_input(INPUT_POST, "total", FILTER_SANITIZE_NUMBER_INT);
                    $totalPrice = filter_input(INPUT_POST, "totalPrice", FILTER_SANITIZE_NUMBER_INT);

                    echo "<table>
                            <tr><th>Din Beställning</th></tr>
                            <tr><td>Chockolad : $antalC st</td></tr>
                            <tr><td>Jordgubb : $antalS st</td></tr>
                            <tr><td>Tottalt : $totalPrice kr</td></tr>
                            <tr><td>Order nummer : *randomnumber*</td></tr>
                        </table>";
                } else {
                    header("Location: butik.php");
                    exit;
                }
            ?>

            <!-- <table>
                <tr><th>Din Beställning</th></tr>
                <tr><td>Chockolad : $antalC</td></tr>
                <tr><td>Jordgubb : $antalS</td></tr>
                <tr><td>Tottalt : $totalPrice</td></tr>
                <tr><td>Order nummer : $ordernum</td></tr>
            </table> -->
        </main>
    </div>
</body>
</html>