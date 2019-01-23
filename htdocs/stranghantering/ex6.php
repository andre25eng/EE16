<?php 
/* 6. Write a PHP script to extract the user name from the following email ID. Go to the editor
Sample String : 'rayy@example.com'
Expected Output : 'rayy' 
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
        $email = "rayy@example.com";
        $user = strstr($email, '@', true);
        echo "$user";
    ?>
</body>
</html>