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
    if (isset($_POST["num1"])&& isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if  ($num1 < $num2) {
        echo "<p>Ta-da!</p>";
        for ($i=$num1+1; $i < $num2 ; $i++) { 
            echo "$i ";
        }
    } else {
        echo "<p>Tal ett måste vara lägre än det andra!</p>";
    }
    }
    ?>

    <form action="#" method="post">
        <label for="">Tal 1 </label><input type="text" name="num1"><br>
        <label for="">Tal 2 </label><input type="text" name="num2"><br>
        <button>Beräkna</button>
    </form>
</body>
</html>
</html>