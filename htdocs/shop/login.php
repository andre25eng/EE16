<?php
/*
* PHP version 7
* @category   Webbshop
* @author     André Englund
* @license    PHP CC
*/
?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer nyVara">
        <header>
        <h1>Inloggning</h1>
        <nav>
                <a href="ny_vara.php">Ny Vara</a>
                <?php
                if (!isset($_SESSION["anamn"])) {
                echo "<a href=\"login.php\">Logga In</a>";
                } else {
                echo "<a href=\"logout.php\">Logga Ut</a>";
                }
                ?>
                <a href="lista_vara.php">Handla</a>
            </nav>
        </header>
        <?php
        if (isset($_POST["username"])&& isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if  ($username == 'dre' && $password == 'isdre') {
            $_SESSION["anamn"] = "dre";
            header("Location: ny_vara.php");
            exit;
        } else {
            echo "<p>Wrong Password or Username.</p>";
        }
        }
        ?>

        <p>Pleas log in</p>
        <form action="#" method="post">
            <label for=""></label>Username<input type="text" name="username"><br>
            <label for=""></label>Password<input type="password" name="password"><br>
        <button>Log in</button>
        </form>
    </div>
</body>
</html>