<?php
/*
* PHP version 7
* @category   Webbshop
* @author     André Englund
* @license    PHP CC
*/
?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
    <header>
        <h1>Skicka mail</h1>
    </header>
    <main>

<?php
if (isset($_POST["adressat"]) && isset($_POST["rubrik"]) && isset($_POST["meddelande"])) {
    
    $to = $_POST["adressat"];
    $subject = $_POST["rubrik"];
    $txt = $_POST["meddelande"];

    /* Skicka mail */
    mail($to,$subject,$txt);
    echo "<p>Mailet har skicakats till $to</p>";
}
?>

    <form action="#" method="post">
        <label for="adressat">E-post</label>
        <input type="text" id="adressat" name="adressat"><br>
        <label for="rubrik">Rubrik</label>
        <input type="text" id="rubrik" name="rubrik"><br>
        <label for="meddelande">Meddelande</label>
        <textarea name="meddelande" id="meddelande"></textarea><br>
        <button type="submit">Skicka mail</button>
    </form>
    </main>
    <footer>
    </footer>
</body>
</html>