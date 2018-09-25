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
    $fel = 0;
    if  (isset($_POST["namn"]) && isset($_POST["adress"]) && isset($_POST["postnr"]) && isset($_POST["postort"])&& isset($_POST["epost"])){
        $namn = $_POST["namn"];
        $adress = $_POST["adress"];
        $postnr = $_POST["postnr"];
        $postort = $_POST["postort"];
        $epost = $_POST["epost"];
        $postnr = str_replace($postnr, " ", "");
    
        if (strlen($namn) == 0){
            echo "<p>Varning Vänligeng fyll i Namnet.</p>";
            $fel++;
        }
        if (strlen($adress) == 0){
            echo "<p>Varning Vänligeng fyll i Adress.</p>";
            $fel++;
        }
        if (strlen($postnr) == 0){
            echo "<p>Varning Vänligeng fyll i giltigt Postnr.</p>";
            $fel++;
        }
        if (strlen($postort) == 0){
            echo "<p>Varning Vänligeng fyll i Postort.</p>";
            $fel++;
        }
        if (strlen($epost) == 0){
            echo "<p>Varning Vänligeng fyll i Epost.</p>";
            $fel++;
        }
    

        if (strlen($namn) <= 3){
            echo "<p>Varning för kort namn!</p>";
            $fel++;
        }
        if (strlen($adress) <= 3){
            echo "<p>Varning adressen är för kort!</p>";
            $fel++;
        }
        if (strlen($postnr) <= 3){
            echo "<p>Varning postnr för kort!</p>";
            $fel++;
        }
        if (strlen($postort) <= 3){
            echo "<p>Varning postort för kort!</p>";
            $fel++;
        }
        if (strlen($epost) <= 3){
            echo "<p>Varning epost för kort!</p>";
            $fel++;
        }
    

        if (strlen($postnr) != 5){
            echo "<p>Postnummer måste inehålla 5 nummer!</p>";
            $fel++;
        }
        if (!ctype_digit($postnr)) {
            echo "<p>Får endast inehålla sifror!</p>";
            $fel++;
        }
        if (strlen($epost) <= 6){
            echo "<p>Epost måste inehålla minst 6 tecken!</p>";
            $fel++;
        }
        if (!strpos($epost, '@')) {
            echo "<p>Epost måste inehålla @</p>";
            $fel++;
        }
        if (!strpos($epost, '.')) {
            echo "<p>Epost måste inehålla misnt 1 punkt!</p>";
            $fel++;
        }

    }
        if ($fel == 0) {
?>
    <form action="#" method="post">
        <label for="">Namn</label><input type="text" name="namn"><br>
        <label for="">Adress</label><input type="text" name="adress"><br>
        <label for="">Postnr</label><input type="text" name="postnr"><br>
        <label for="">Postort</label><input type="text" name="postort"><br>
        <label for="">Epost</label><input type="text" name="epost"><br>
        <button>Skicka in</button>
    </form>
<?php
        } else {
?>
    <form action="#" method="post">
        <label for="">Namn</label><input type="text" name="namn" value="<?php echo $namn ?>"><br>
        <label for="">Adress</label><input type="text" name="adress" value="<?php echo $adress ?>"><br>
        <label for="">Postnr</label><input type="number" name="postnr" value="<?php echo $postnr ?>"><br>
        <label for="">Postort</label><input type="text" name="postort" value="<?php echo $postort ?>"><br>
        <label for="">Epost</label><input type="text" name="epost" value="<?php echo $epost ?>"><br>
        <button>Skicka in</button>
    </form>
<?php
        } 
?>
</body>
</html>