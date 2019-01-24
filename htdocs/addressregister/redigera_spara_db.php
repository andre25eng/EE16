<?php
include_once("../../admin/konfig_db.php");

session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Redigera</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="regestrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <h3>Redigera</h3>
        <?php
            if (isset($_POST["id"]) && isset($_POST["fnamn"]) && isset($_POST["enamn"]) && isset($_POST["epost"])) {
                $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);
                $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
                $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
                $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);

                $conn = new mysqli($hostname, $user, $password, $databas);
                
                if ($conn->connect_error) {
                    die("Kunde inte ansluta till databsen: " . $conn->connect_error);
                } else {
                    /* echo "<p>anslutningen lyckades!</p>"; */
                }

                $sql = "UPDATE personer SET fnamn = '$fnamn', enamn = '$enamn', epost = '$epost' WHERE id = '$id'";
                $result = $conn->query($sql);
                /* Stänger ner anslutningen */

                if (!$result) {
                    die("Något gick fel med sql satsen.");
                } else {
                    echo "<p>Uppdatering klar</p>";
            }
        }
        ?>
    </div>
</body>
</html>