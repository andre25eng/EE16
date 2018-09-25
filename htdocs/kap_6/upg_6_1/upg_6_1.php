<?php
/*
* PHP version 7
* @category   Förmulär
* @author     Dre
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulärcheck</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if  (isset($_POST["namn"]) && isset($_POST["adress"]) && isset($_POST["postnr"]) && isset($_POST["postort"])){
        $namn = $_POST["namn"];
        $adress = $_POST["adress"];
        $postnr = $_POST["postnr"];
        $postort = $_POST["postort"];
    
        if (strlen($namn) == 0){
            echo "<p>Varning Vänligeng fyll i Namnet.</p>";
        }
        if (strlen($adress) == 0){
            echo "<p>Varning Vänligeng fyll i Adress.</p>";
        }
        if (strlen($postnr) == 0){
            echo "<p>Varning Vänligeng fyll i giltigt Postnr.</p>";
        }
        if (strlen($postort) == 0){
            echo "<p>Varning Vänligeng fyll i Postort.</p>";
        }
    
        if (strlen($namn) <= 3){
            echo "Varning för kort namn!";
        }
        if (strlen($adress) <= 3){
            echo "Varning adressen är för kort!";
        }
        if (strlen($postnr) <= 3){
            echo "Varning postnr för kort!";
        }
        if (strlen($postort) <= 3){
            echo "Varning postort för kort!";
        }
    
        if (strlen($postort) != 5){
            echo "Postnummer måste inehålla 5 nummer!";
        }
        if (!ctype_digit($postnr)) {
            echo "Får endast inehålla sifror!";
        }
    
    }
    ?>
    <form action="#" method="post">
        <label for="">Namn</label><input type="text" name="namn"><br>
        <label for="">Adress</label><input type="text" name="adress"><br>
        <label for="">Postnr</label><input type="number" name="postnr"><br>
        <label for="">Postort</label><input type="text" name="postort"><br>
        <button>Skicka in</button>
</body>
</html>