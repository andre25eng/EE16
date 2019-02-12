<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spara Ditt Urklipp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
            /* Skapa en tabell */
            echo "<table><tr><th>Filnamn</th></tr>";

            /* Hitta alla filerna i mappen "klippbok" */
            $fileList = glob('klippbok/*');
 
            /* För varje fil i mappen så ska det skrivas ut en ny rad i tabellen som kan klicka för att bli tagen till filen ineholl */
            foreach($fileList as $filename){
                $filename = substr(strrchr($filename, "/"), 1);
                echo "<tr>";
                echo "<td><a href='klippbok/$filename'>$filename</a></td>";
                echo "</tr>";
            }
            /* Stänga tabellen */
            echo "</table>";
        ?>
    </div>
</body>
</html>