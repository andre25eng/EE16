<?php
/*
* PHP version 7
* @category   Fill uppladning
* @author     André Englund
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filluppladning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        if (isset($_GET["uploadsuccess"])) {
            echo "<script>alert(\"Uppladning lyckades\");</script>";
        }
    ?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="filen">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
    
</body>
</html>