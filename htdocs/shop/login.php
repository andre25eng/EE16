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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
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
            if (isset($_POST["username"]) && isset($_POST["password"])) {
                $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
                
                /* Läsa av hash filen (admin.txt) */
                $allaRader = file($_SERVER["DOCUMENT_ROOT"] . "/../config/admin.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                
                /* loopa igenom rad för rad */
                foreach ($allaRader as $rad) {
                    
                    $delar = explode('¤', $rad);

                    /* Om raden inte inehåller 2 delar hoppa över den */
                    if (sizeof($delar) !=2) {
                        continue;
                    }
                    
                    $usernameFile = $delar[0];
                    $hashFile = $delar[1];
                    
                    /* Hitta använadrnamn och jämföra det */
                    if  ($username == $usernameFile) {
                        if (password_verify($password, $hashFile)) {
                            /* Success! */
                            echo "success!";
                            $_SESSION["anamn"] = $username;
                            header("Location: ny_vara.php");
                        } else {
                            echo "<p>Wrong Password</p>";
                        }
                    } else {
                        echo "<p>Wrong Username.</p>";
                    }
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