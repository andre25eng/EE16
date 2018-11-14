<?php
/*
* PHP version 7
* @category   Webbshop
* @author     André Englund
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
    <div class="kontainer kassa">
        <header>
            <h1>Kassan</h1>
        </header>
        <main>
<?php
/* Ta emot data */
$antalVaror = filter_input(INPUT_POST, "antalVaror", FILTER_SANITIZE_NUMBER_INT;
$total = filter_input(INPUT_POST, "total", FILTER_SANITIZE_NUMBER_INT);
$korgen = filter_input(INPUT_POST, "korgen", FILTER_SANITIZE_);

/* Kontrollera att data finns */
if (isset($_POST["antalVaror"]) && isset($_POST["total"]) && isset($_POST["korgen"])) {

    $varor = json_decode($korgen);
    echo "<table>";
    echo "<tr>
            <th>Beskrivning</th>
            <th>Antal</th>
            <th>Styck Pris</th>
            <th>Summa</th>
          </tr>";
    foreach ($varor as $vara) {
        echo "<tr>";
        echo "<td>$vara->beskrivning</td>";
        echo "<td>$vara->antal st</td>";
        echo "<td>$vara->pris kr</td>";
        echo "<td>$vara->summa kr</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<div class=\"total\">";
    echo "<p>varor: $antalVaror</p>";
    echo "<p>Total: $total</p>";
    echo "</div>";
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