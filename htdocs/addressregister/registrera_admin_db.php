<?php
include_once("../../admin/konfig_db.php");

session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adressregister</title>
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
            if (isset($_POST["anamn"]) && isset($_POST["losen"])) {
                $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
                $losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);
                
                /* Hämta användarens hash lödenord */
                $conn = new mysqli($hostname, $user, $password, $databas);
            
                if ($conn->connect_error) {
                    die("Kunde inte ansluta till databsen: " . $conn->connect_error);
                } else {
                    /* echo "<p>anslutningen lyckades!</p>"; */
                }          
                
                $hash = password_hash($losen, PASSWORD_DEFAULT);

                $sql = "INSERT INTO admin (anamn, hash) VALUES ('$anamn', '$hash');";
                $result = $conn->query($sql);
                
                if (!$result) {
                    die("Något gick fel med sql satsen.");
                } else {
                    echo "<p>Admnin registrerad</p>";
                }
            $conn->close();
            }
        ?>
        <p>Var good logga in</p>
        <form action="#" method="post">
            <label>Username</label><input type="text" name="anamn"><br>
            <label>Password</label><input type="password" name="losen"><br>
            <button>Log in</button>
        </form>
    </div>
</body>
</html>