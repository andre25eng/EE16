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
        $name = $_POST["name"];
        $email = $_POST["email"];
        echo "Tack $name, Vi kommer ta kontakt med dig på $email.";
    ?>
</body>
</html>