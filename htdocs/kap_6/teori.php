<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $address = "  Craafords väg 12  ";
    $trimAddress = trim($address);
    echo ".$address.$trimAddress.";

    $namn = "André";
    $stortNamn = strtoupper($namn);
    echo "<p>$namn $stortNamn</p>";

    echo "Längd = " . strlen($namn);

    $hello = "Hej på dig!";
    echo "<p>" . substr($hello, 0 , 3). "</p>";
    echo "<p>" . substr($hello, 4 , 2). "</p>";
    echo "<p>" . mb_substr($hello, 4 , 2). "</p>";
    echo "<p>" . substr($hello, 7 , 3). "</p>";
    echo "<p>" . substr($hello, -4). "</p>";

    $epost = "andre@gmaail.com";
    if (strstr($epost, "@")) {
        echo "<p>innehåller @</p>";
    }

    
    ?>   
</body>
</html>