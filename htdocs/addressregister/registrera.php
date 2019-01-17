<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regestrering</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if (isset($_POST["fnamn"]) && isset($_POST["enamn"]) && isset($_POST["epost"])) {
            $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
            $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
            $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);

            $handtag = fopen("register.txt", "a");    
            fwrite($handtag, "$fnamn $enamn $epost" . PHP_EOL);
            fclose($handtag);
        }
    ?>
    <div class="kontainer">
        <h3>Registrera address</h3>
        <form action="#" method="post"> 
            <input type="text" name="fnamn" id="fnamn" placeholder="Ditt förnamn"><br>
            <input type="text" name="enamn" id="enamn" placeholder="Ditt efternamn"><br>
            <input type="email" name="epost" id="epost" placeholder="Ange din epost"><br>
            <button>Skicka</button>
        </form>
    </div>
</body>
</html>