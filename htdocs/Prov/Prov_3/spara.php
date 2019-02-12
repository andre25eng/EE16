<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spara Ditt Urklipp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        /* Kontrolera lösenord */
        if (isset($_POST["losen"])) {
            $losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);

            /* Om lösenordet är rätt fortset med nästa if sats */
            if ($losen == "12345") {
                /* Kontrolera om namn och orklipp har skickats med */
                if (isset($_POST["namn"]) && isset($_POST["urklipp"])) {
                    /* filtrera namn och urklipp för att inte få farligt ineholl */
                    $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
                    $urklipp = filter_input(INPUT_POST, "urklipp", FILTER_SANITIZE_STRING);

                    /* Få fram en timestamp och sätta den i en variabel */
                    $tid = date("his");

                    /* Döpa filen till tiden den skrevs och namnet på skribenten */
                    $fill = "klippbok/$tid$namn.txt";

                    /* Skapa filen och fylla i den med tid, namn, och urklippet */
                    $handtag = fopen($fill, "w+");    
                    fwrite($handtag, "$tid $namn : $urklipp" . PHP_EOL);
                    fclose($handtag);
            } else {
                /* Om något går fal medela användaren att fil inte sparats */
                echo "<script>alert(\"Kunde inte spara\");</script>";
            }
        } else {
            /* om lösenordet är fel alerta använadren */
            echo "<script>alert(\"Fel lösenord! Urklipp är inte sparat\");</script>";
        }
    }    
    ?>
    <div class="kontainer">
        <h1>Spara i klippboken</h1>
        <form action="#" method="post">
            <input type="password" name="losen" id="losen" placeholder="Ange lösenordet"><br>
            <input type="text" name="namn" id="namn" placeholder="Ditt namn"><br>
            <textarea id="urklipp" name="urklipp" cols="30" rows="10" placeholder="Ditt urklipp"></textarea><br>
            <button>Spara</button>
        </form>
    </div>
</body>
</html>