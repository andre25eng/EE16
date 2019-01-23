<?php
/* 5. Write a PHP script to extract the file name from the following string. Go to the editor
Sample String : 'www.example.com/public_html/index.php'
Expected Output : 'index.php'
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
        $fulllink = "www.example.com/public_html/index.php";
        $filename = substr(strrchr($fulllink, "/"), 1);

        echo $filename;
    ?>
</body>
</html>