/* Gör ett formulär där användaren ska fylla i namn, adress, postnr och postort.

Kontrollera att alla fälten är ifyllda, och innehåller minst 3 tecken.
Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror. */
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulärcheck</title>
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
            echo "<p>Varning Vg fyll i Namnet.</p>";
        }
        if (strlen($adress) == 0){
            echo "<p>Varning Vg fyll i Adress.</p>";
        }
        if (strlen($postnr) == 0){
            echo "<p>Varning Vg fyll i Postnr.</p>";
        }
        if (strlen($postort) == 0){
            echo "<p>Varning Vg fyll i Postort.</p>";
        }
    
    
    
    
    
    
    }
    ?>
    <form action="#" method="post">
        <label for="">Namn</label><input type="text" name="namn"><br>
        <label for="">Adress</label><input type="text" name="adress"><br>
        <label for="">Postnr</label><input type="text" name="postnr"><br>
        <label for="">Postort</label><input type="text" name="postort"><br>
        <button>Skicka in</button>
</body>
</html>