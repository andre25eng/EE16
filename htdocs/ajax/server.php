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
    if (isset($_POST["name"]) && isset($_POST["meddelande"])) {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
        $meddelande = filter_input(INPUT_POST, "meddelande", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
    
        echo "$name:$meddelande";
    }
    ?>
</body>
</html>