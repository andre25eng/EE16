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
        $nord = $_POST["nord"];
        $sord = $_POST["sord"];

        /* $haystack = str_word_count($texten, 1 'åäö'); */
        $haystack = explode(" ",$texten);

        $nyText = "";

        foreach ($haystack as $word) {
            if ($word == $sord) {
                $nyText = $nyText . $nord;
            } else {
                $nyText = $nyText . " " . $word;
            }
        }
        
        echo "<p>Den nya texten blir <em>$nyText</em>.</p>";
    ?>
</body>
</html>