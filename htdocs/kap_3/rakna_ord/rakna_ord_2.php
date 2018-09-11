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
    
        $antal = str_word_count($texten);
    
        echo "<p>Din texten innehållar $antal ord.</p>"    
    ?>
</body>
</html>