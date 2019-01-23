<?php
/* 1. Write a PHP script to : - Go to the editor
a) transform a string all uppercase letters. 
b) transform a string all lowercase letters. 
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase.
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
        $text = "andre englund";
        $uppercase = strtoupper($text);
        echo "<p>$uppercase</p>";
        $lowercase = strtolower($text);
        echo "<p>$lowercase</p>";
        $firstuppercase = ucfirst($text);
        echo "<p>$firstuppercase</p>";
        $allfirstuppercase = ucwords($text);
        echo "<p>$allfirstuppercase</p>";
    ?>
</body>
</html>