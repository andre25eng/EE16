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
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if  ($num1 < $num2) {
        echo "<p>Ta-da!</p>";
        for ($i=$num1+1; $i < $num2 ; $i++) { 
            echo "$i ";
        }
    } else {
        header('Location: upg_3_3.php?fel=1');
        die();
    }
    ?>
</body>
</html>