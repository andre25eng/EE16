<?php
/* 10. Write a PHP script to replace the first 'the' of the following string with 'That'. Go to the editor
Sample date : 'the quick brown fox jumps over the lazy dog.'
Expected Result : That quick brown fox jumps over the lazy dog.
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
        $txt = "the quick brown fox jumps over the lazy dog.";
        echo preg_replace('/the/', 'That', $txt, 1);
    ?>
</body>
</html>