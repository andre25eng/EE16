<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prov 1</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
</head>
<body>
    <?php 

    /* Tar emot data från formulär */
    if (isset($_POST["namn1"]) && isset($_POST["lon1"]) && isset($_POST["skatt"])){

        $namn1 = $_POST["namn1"];
        $lon1 = $_POST["lon1"];
        $lon2 = 0;
        $skatt = $_POST["skatt"];
        $fel = 0;


        /* Fel skökning */
        if ($lon1 <= 10000) {
            echo "<p>Bruttolön måste vara mer en 10000kr</p>";
            $fel++;
        }
        if ($lon1 >= 45000) {
            echo "<p>Bruttolön måste vara mindre en 45000kr</p>";
            $fel++;
        }
        if ($skatt <= 10) {
            echo "<p>Skattesats måste vara över 10%</p>";
            $fel++;
        }
        if ($skatt >=45) {
            echo "<p>Skattesats måste vara under 45%</p>";
            $fel++;
        }
    }
            if ($fel == 0) {
?>
    <form action="#" method="post">
        <label for="">Namn</label><input type="text" name="namn1"><br>
        <label for="">Bruttolön</label><input type="number" name="lon1"><br>
        <label for="">Skattesats</label><input type="number" name="skatt"><br>
        <button>Beräkna</button>
    </form>
<?php
        } else {
?>
    <form action="#" method="post">
        <label for="">Namn</label><input type="text" name="namn1" value="<?php echo $namn1 ?>"><br>
        <label for="">Bruttolön</label><input type="number" name="lon1" value="<?php echo $lon1 ?>"><br>
        <label for="">Skattesats</label><input type="number" name="skatt" value="<?php echo $skatt ?>"><br>
        <button>Beräkna</button>
    </form>
<?php

            /* Beräkning */
        if ($fel == 0) {
            $lon2 = $lon1 * (100 - $skatt) / 100;
            echo "<p>$namn1's lön är $lon2 kr efter skatt.</p>
                  <p>Beräkning baserat på $lon1 och $skatt %.</p>";
        } 
    } 
?>
</body>
</html>