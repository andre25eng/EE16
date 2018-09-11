<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="byta_ord_2.php" method="post">
        <label for="ruta">Texten: </label>
        <textarea name="texten" id="ruta" cols="30" rows="10"></textarea><br>
        <label for="">Sök ord: </label>
        <input type="text" name="sord"><br>
        <label for="">Nytt ord: </label>
        <input type="text" name="nord"><br>
        <button>Hitta ord</button>
    </form>
</body>
</html>