<?php
/*
* PHP version 7
* @category   Prov_4
* @author     André Englund <andre25eng@gmail.com>
* @license    PHP CC
*/
?><!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmer topp 50</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h2>Filmer topp 50</h2>
        <p>Här söker du filmer efter deras första bokstav.<br>
           Tex. djur som börjar på 'a' med: skriv 'a'.<br>
           Tex. djur som börjar på 'a' eller 'b' med: skriv 'a, b'.</p>
        <form action="#" method="post">
            <label>Ang sökterm</label>
            <input type="text" name="sokterm">
            <button>Sök</button>
        </form>
        <?php
            if (isset($_POST["sokterm"])) {
                $sokterm = filter_input(INPUT_POST, "sokterm", FILTER_SANITIZE_STRING);
                
                if ($sokterm == "") {echo "<p>Fyll i minst en bokstav!</p>";} else {
                    /* Läst in fil */
                    $allaRader = file("movies.tsv");

                    /* Riktig sök term */
                    $rSokterm = explode("*", $sokterm);
                    $lenSokterm = strlen($rSokterm[0]);

                    /* Rd för rad */
                    echo "<table><th>År</th><th>Filmer</th>";
                    foreach ($allaRader as $rad) {
                        $rad2 = substr("$rad", 0, $lenSokterm);
                        
                        if ($rad2 == $rSokterm[0]) {
                            $rad3 = explode("\t", $rad);
                            echo "<tr><td>$rad3[2]</td><td>$rad3[0]</td></tr>";
                        }
                    }
                    echo "</table>";
                }
            }
        ?>
    </div>
</body>
</html>