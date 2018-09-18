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
    if (isset($_POST["num1"])) {
        $num1 = $_POST["num1"];

        for ($i=1; $i <= num1; $i++) { 
            if ($i*$i < 50) {
             echo $i . " " . $i*$i; 
            }
        }
    } 
    ?>

    <form action="#" method="post">
        <label for="">Tal 1 </label><input type="text" name="num1"><br>
        <button>Beräkna</button>
    </form>
</body>
</html>
</html>