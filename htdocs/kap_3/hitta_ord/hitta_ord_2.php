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
        $texten = $_POST["texten"];
        $needle = $_POST["ordet"];

        /* $haystack = str_word_count($texten, 1 'åäö'); */
        $haystack = explode(" ",$texten);
        $antal = 0;

        foreach ($haystack as $word) {
            if ($word == $needle) {
                $antal++;
            }
        }
        
        echo "<p>$needle hittades $antal gånger.</p>"
    ?>
</body>
</html>