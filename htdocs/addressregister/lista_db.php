<?php
include_once("../../admin/konfig_db.php");

session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista addresserna</title>
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
        $conn = new mysqli($hostname, $user, $password, $databas);
        
        if ($conn->connect_error) {
            die("Kunde inte ansluta till databsen: " . $conn->connect_error);
        } else {
            /* echo "<p>anslutningen lyckades!</p>"; */        }

        $sql = "SELECT * FROM personer";
        $result = $conn->query($sql);

        if (!$result) {
            die("Något gick fel med sql satsen.");
        } else {
            /* echo "<p>Personenuppgifterna kunde läsas in.</p>"; */
        }

        echo "<table>
                <tr>
                    <th>Förnamn</th>
                    <th>Efternamn</th>
                    <th>Epost</th>
                </tr>";

        while ($rad = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$rad['fnamn']}</td>";
            echo "<td>{$rad['enamn']}</td>";
            echo "<td>{$rad['epost']}</td>";
            echo "<td><a href=\"radera_verifiera_db.php?id={$rad['id']}\">Radera</a></td>";
            echo "<td><a href=\"redigera_db.php\">Redigera  </a></td>";
            echo "</tr>";
        }
        echo "</table>";
        $conn->close();
        ?>
    </div>
</body>
</html>