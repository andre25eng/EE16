<?php
/* 2. Write a PHP script to split the following string. Go to the editor
Sample string : '082307'
Expected Output : 08:23:07
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
        $txt = "082307";
        $a = substr($txt, 0, 2) . ":" . substr($txt, 2, 2) . ":" . substr($txt, 4, 2);
        echo $a;
    ?>
</body>
</html>