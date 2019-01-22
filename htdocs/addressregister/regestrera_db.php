<?php
include_once("../../admin/konfig_db.php");

session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regestrering</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if (isset($_POST["fnamn"]) && isset($_POST["enamn"]) && isset($_POST["epost"])) {
            $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
            $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
            $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);

            /* Logga in på databasen */
            $conn = new mysqli($hostname, $user, $password, $databas);
            /* Fungerar anslutningen */
            if ($conn->connect_error) {
                die("Kunde inte ansluta till databsen: " . $conn->connect_error);
            } else {
                /* echo "<p>anslutningen lyckades!</p>"; */
            }
            /* Lagra data i tabellen */
            $sql = "INSERT INTO personer (fnamn, enamn, epost) VALUES ('$fnamn', '$enamn', '$epost');";
            $result = $conn->query($sql);
            /* Stänger ner anslutningen */

            if (!$result) {
                die("Något gick fel med sql satsen.");
            } else {
                /* echo "<p>Personen är registrerad</p>"; */
            }
            
        }
    ?>
    <div class="kontainer">
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="regestrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <h3>Registrera address</h3>
        <form action="#" method="post"> 
            <input type="text" name="fnamn" id="fnamn" placeholder="Ditt förnamn"><br>
            <input type="text" name="enamn" id="enamn" placeholder="Ditt efternamn"><br>
            <input type="email" name="epost" id="epost" placeholder="Ange din epost"><br>
            <button>Skicka</button>
        </form>
    </div>
</body>
</html>