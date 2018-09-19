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
    if (isset($_POST["num1"]) && isset($_POST["r1"]) && isset($_POST["rent1"])) {
        $num1 = $_POST["num1"];
        $r1 = $_POST["r1"]; 
        $rent1 = $_POST["rent1"];

    if ($r1 == "y1") {
        $y1 = $num1*($rent1/100+1)*($rent1/100+1);
        echo"<p>$y1</p>";
    }

    if ($r1 == "y3") {
        $y3 = $num1*($rent1/100+1)*($rent1/100+1)*($rent1/100+1)*($rent1/100+1);
        echo"<p>$y3</p>";
    }

    if ($r1 == "y5") {
        $y5 = $num1*($rent1/100+1)*($rent1/100+1)*($rent1/100+1)*($rent1/100+1)*($rent1/100+1)*($rent1/100+1);
        echo"<p>$y5</p>";
    }
    }
    ?>

    <form action="#" method="post">
        <label for="">Låne Bellop</label><input type="text" name="num1"><br>
        <label for="">Renta Bellop</label><input type="number" name="rent1"><br>
        <label for="">1 år </label><input type="radio" name="r1" value="y1"><br>
        <label for="">3 år </label><input type="radio" name="r1" value="y3"><br>
        <label for="">5 år </label><input type="radio" name="r1" value="y5"><br>
        <button>Beräkna</button>
    </form>
</body>
</html>
</html>