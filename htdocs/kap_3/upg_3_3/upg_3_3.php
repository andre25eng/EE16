<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_GET["fel"])) {
    $fel = $_GET["fel"];
    if ($fel == 1) {
        echo "<p>Tal ett måste vara lägre än det andra!</p>";
    }
    }
?>
    <form action="upg_3_3b.php" method="post">
        <label for="">Tal 1 </label><input type="text" name="num1"><br>
        <label for="">Tal 2 </label><input type="text" name="num2"><br>
        <button>Beräkna</button>
    </form>
</body>
</html>