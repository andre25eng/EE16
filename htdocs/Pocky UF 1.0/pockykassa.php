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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kassa</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="hdiv">
            <div class="flex1"><img src="Pictures/pockylogo.png" alt="Pocky logo"></div>
            <nav class="flex2">
                <ul>
                    <li><a href="pockysthlm4.php">Tillbaka till Butik</a></li>
                </ul>
            </nav>
            <div class="flex1"></div>
        </div>
    </header>
    <div class="maindiv">
        <main>
            <div>
                <?php
                /* Ta emot data */
                $antalVaror = filter_input(INPUT_POST, "antalVaror", FILTER_SANITIZE_NUMBER_INT);
                $total = filter_input(INPUT_POST, "total", FILTER_SANITIZE_NUMBER_INT);
                $korgen = json_decode($_POST(["korgen"]));

                /* Kontrollera att data finns */
                if ($antalVaror && $total && $korgen) {

                    $varor = json_decode($korgen);
                    echo "<table>";
                    echo "<tr>
                            <th>Beskrivning</th>
                            <th>Antal</th>
                            <th>Styck Pris</th>
                            <th>Summa</th>
                        </tr>";
                    foreach ($varor as $vara) {
                        
                        $beskrivning = filter_var($vara->beskrivning, FILTER_SANITIZE_STRING);
                        $antal = filter_var($vara->antal, FILTER_SANITIZE_NUMBER_INT);
                        $pris = filter_var($vara->pris, FILTER_SANITIZE_NUMBER_INT);
                        $summa = filter_var($vara->summa, FILTER_SANITIZE_NUMBER_INT);

                        echo "<tr>";
                        echo "<td>$beskrivning</td>";
                        echo "<td>$antal st</td>";
                        echo "<td>$pris kr</td>";
                        echo "<td>$summa kr</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<div class=\"total\">";
                    echo "<p>varor: $antalVaror</p>";
                    echo "<p>Total: $total</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </main>
    </div>
    <script src="script2.js"></script>
</body>
</html>