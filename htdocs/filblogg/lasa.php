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
        /* öppna textfilen och läas inehållet och skriva ut det. */

        $allaRader = file("inlaggen.txt");

        foreach ($allaRader as $rad) {
        echo $rad . "<br>";
        }

    ?>
    </main>
    <footer>
    
    </footer>
    </div>

</body>
</html>