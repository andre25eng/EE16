<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datum på svenska</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    function datum() {
    $dagar[1] = "Måndag";
    $dagar[2] = "Tisdage";
    $dagar[3] = "Onsdag";
    $dagar[4] = "Torsdag";
    $dagar[5] = "Fredag";
    $dagar[6] = "Lördag";
    $dagar[7] = "Söndag";
    
    
    $monad[1] = "Januari";
    $monad[2] = "Febuari";
    $monad[3] = "Mars";
    $monad[4] = "April";
    $monad[5] = "Maj";
    $monad[6] = "Juni";
    $monad[7] = "Juli";
    $monad[8] = "Augusti";
    $monad[9] = "September";
    $monad[10] = "Oktober";
    $monad[11] = "November";
    $monad[12] = "December";

    
    $dagNr = date("N");
    $dateNr = date(" d");
    $monNr = date("m");
    $ar = date(" Y");

    return "$dagar[$dagNr] $dateNr $monad[$monNr] $ar";
}

echo datum();
    ?>
</body>
</html>