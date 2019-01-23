<?php
/* 7. Write a PHP script to get the last three characters of a string. Go to the editor
Sample String : 'rayy@example.com'
Expected Output : 'com' 
Click me to see the solution */
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
        $email = "rayy@example.com";
        $user = substr(strrchr($email, "."), 1);
        echo "$user";
    ?>
</body>
</html>