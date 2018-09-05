<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="upg_3b.php" method="post">
        <label for="">Temperature in Celsius</label><input type="text" name="temp"><br>
        <input type="radio" name="omvandla">C° till F°<br>
        <input type="radio" name="omvandla">F° till C° <br>
        <button>Convert</button>
    </form>
    <?php ?>
</body>
</html>