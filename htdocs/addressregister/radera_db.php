<?php
include_once("../../admin/konfig_db.php");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="regestrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            $conn = new mysqli($hostname, $user, $password, $databas);
            
            if ($conn->connect_error) {
                die("Kunde inte ansluta till databsen: " . $conn->connect_error);
            } else {
                /* echo "<p>anslutningen lyckades!</p>"; */
            }

            $sql = "DELETE FROM personer WHERE id = '$id'";
            $result = $conn->query($sql);

            if (!$result) {
                die("Något gick fel med sql satsen.");
            } else {
                echo "<p>Personen med id=$id har raderats</p>";
            }
        } else {
            echo "<p>Något gick fel!</p>";
        }
        ?>
    </div>
</body>
</html>