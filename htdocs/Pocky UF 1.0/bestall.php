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
                </div>
            </main>
        </div>
    </div>
</body>
</html>