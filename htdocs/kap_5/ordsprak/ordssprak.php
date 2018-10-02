<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slumpvalda ordspråk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $allaOrdsprak[0] = "Att skiljas är att dö en smula.";
    $allaOrdsprak[1] = "Inte de skarpaste kniven i lådan.";
    $allaOrdsprak[2] = "Det är menskligt att fela.";
    $allaOrdsprak[3] = "Skiriboop skiribap.";
    $allaOrdsprak[4] = "Små grytor har också öron.";
    $allaOrdsprak[5] = "Var ska sleven vara om inte i gröten";
    $allaOrdsprak[6] = "Stor i orden men liten på jorden";
    $allaOrdsprak[7] = "Nära skjuter ingen hare.";
    $allaOrdsprak[8] = "Ge dig inte på berg när det finns småsten.";
    $allaOrdsprak[9] = "Äpplet faller inte långt från trädet.";

    /* Skriv ut en array med allt innehåll*/
    /* Antalet positioner i en array */
    echo "<h3>Antalet positioner i en array</h3>";
    $antalOrdsprak = count($allaOrdsprak);
    echo "<p>Jag har $antalOrdsprak positioner i min array.</p>";

    /* Skriv ut alla ordspråk i arrayen */
    echo "<h3>Skriv ut alla ordspråk i arrayen</h3>";
    foreach ($allaOrdsprak as $ordsprak) {
        echo "<p>$ordsprak</p>";
    }

    /* Skriv ut 3 ordsprak */
    echo "<h3>Skriv ut 3 ordsprak</h3>";
    for ($i=0; $i < 3; $i++) { 
        echo "<p>$allaOrdsprak[$i]</p>";
    }

    /* Skriva alla ordsråk med en for-loop */
    echo "<h3>Skriva alla ordsråk med en for-loop</h3>";
    for ($i=0; $i < $antalOrdsprak; $i++) { 
        echo "<p>$allaOrdsprak[$i]</p>";
    }

    /* Slump nummer mellan 0 till 9 */
    echo "<h3>Slump nummer mellan 0 till 9</h3>";
    /* Skapa en tom array som ska innehålla alla slumptal */
    $allaSlumptal = [];
    for ($i=0; $i < 3; $i++) {

        do {
            $slumptal = rand(0, 9);
        } while (in_array($slumptal, $allaSlumptal));

        $allaSlumptal[] = $slumptal;
        

    /* Skriv ut ordspråket */
    echo "<p>$allaOrdsprak[$slumptal]</p>";
    }
    ?>
</body>
</html>