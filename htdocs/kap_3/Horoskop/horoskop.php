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
        $url = "https://astro.elle.se/";

        /* Ladda ner */
        $sida = file_get_contents($url);

        /* början div */
        $start = strpos($sida, "Väduren");

        /* slut div */
        $end = strpos($sida, "post-pagelink");

        /* Ta horoskop */
        $length = $end - $start;
        $hs = substr($sida, $start, $length);

        /* skriva på sdain */
        echo $hs;
    ?>
</body>
</html>