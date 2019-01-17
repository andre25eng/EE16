<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista addresserna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php 
            $allaRader = file("register.txt");
            echo "<table        ><tr><th>Förnamn</th><th>Efternamn</th><th>Epost</th></tr>";
            foreach ($allaRader as $rad) {
                echo "<tr>";
                $delar = explode(" ", $rad);
                echo "<td>$delar[0]</td>";
                echo "<td>$delar[1]</td>";
                echo "<td>$delar[2]</td>";
                echo "</tr>";
                }
            echo "</table>";
            ?>
    </div>
</body>
</html>