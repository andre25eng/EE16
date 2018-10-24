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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer kassa">
        <header>
            <h1>Kassan</h1>
        </header>
        <main>
<?php

/* Kontrollera att data finns */
if (isset($_POST["antalVaror"]) && isset($_POST["total"]) && isset($_POST["korgen"])) {

    /* Ta emot data */
    $antalVaror = $_POST["antalVaror"];
    $total = $_POST["total"];
    $korgen = $_POST["korgen"];

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