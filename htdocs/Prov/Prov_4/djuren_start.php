<?php
/*
* PHP version 7
* @category   Prov_4
* @author     André Englund <andre25eng@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Djuralfabetet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h2>Djuralfabetet</h2>
        <p>Här söker du djur efter deras första bokstav.<br>
           Tex. djur som börjar på 'a' med: skriv 'a'.<br>
           Tex. djur som börjar på 'a' eller 'b' med: skriv 'a, b'.</p>
        <form action="#" method="post">
            <label>Ang sökterm</label>
            <input type="text" name="sokterm">
            <button>Sök</button>
        </form>
        <?php
            if (isset($_POST["sokterm"])) {
                $allaRader = file("animals.txt");

                foreach ($allaRader as $rad) {
                    
                    echo $rad . "<br>";
                }
            }
        ?>
    </div>
</body>
</html>