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
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $conn = new mysqli($hostname, $user, $password, $databas);
    if ($conn->connect_error) {
        die("Kunde inte ansluta till databsen: " . $conn->connect_error);
    } else {
        /* echo "<p>anslutningen lyckades!</p>"; */
    }

    $sql = "SELECT * FROM personer WHERE id = '$id'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Något gick fel med sql satsen.");
    } else {
        $rad = $result->fetch_assoc();
    }


}
?>
    <div class="kontainer">
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="regestrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
        <h3>Redigera</h3>
        <form action="redigera_spara_db.php" method="post"> 
            <input type="text" name="fnamn" id="fnamn" value="<?php echo $rad['fnamn']; ?>"><br>
            <input type="text" name="enamn" id="enamn" value="<?php echo $rad['enamn'] ?>"><br>
            <input type="email" name="epost" id="epost" value="<?php echo $rad['epost'] ?>"><br>
            <input type="hidden" name="id" id="epost" value="<?php echo $rad['id'] ?>"><br>
            <button>Uppdatera</button>
        </form>
    </div>
</body>
</html>