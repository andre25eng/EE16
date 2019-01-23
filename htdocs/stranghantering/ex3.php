<?php
/* 3. Write a PHP script to check if a string contains a specific string? Go to the editor
Sample string : 'The quick brown fox jumps over the lazy dog.'
Check whether the said string contains the string 'jumps'.
*/
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
    <?php
    $txt = "The quick brown fox jumps over the lazy dog.";

    if (\strpos($txt, "jumps") !== false) {
        echo "true";
    } else {
        echo "false";
    }

    ?>
</body>
</html>