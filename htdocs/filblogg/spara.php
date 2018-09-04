<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla Blog</title>
    <link rel="stylesheet" href="superhero.epic.css">
</head>
<body>
<h1>Min enkla blogg</h1>
<nav>
        <ul>
            <li><a href="index.php">Hem</a></li>
            <li><a href="skriva.php">Skriva inlägg</a></li>
            <li><a href="lasa.php">Läsa inlägg</a></li>
        </ul>
    </nav>
    <?php
/* ta emot text från formuläret ned i en text fil */

$texten = $_POST["inlagg"];

$handtag = fopen("inlaggen.txt", "a");
fwrite($handtag, $texten . "\n");

echo "<p>Inlägget har sparats!</p>";

fclose($handtag);
?>
</body>
</html>
