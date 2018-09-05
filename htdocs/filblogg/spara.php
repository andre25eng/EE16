<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla Blog</title>
    <link rel="stylesheet" href="superhero.epic.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.inc" ?>
    <main>
    <?php
        /* ta emot text från formuläret ned i en text fil */

        $texten = $_POST["inlagg"];
        $tidpunkt = date(' Y/m/d h:i:s A');

        $handtag = fopen("inlaggen.txt", "a");
        fwrite($handtag, "<p>" . $texten . "\n" . $tidpunkt . "</p>\n");

        echo "<p>Inlägget har sparats!</p>";

        fclose($handtag);
    ?>
    </main>
    <footer>
    
    </footer>
    </div>

</body>
</html>