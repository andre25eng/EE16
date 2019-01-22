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
            if (isset($_POST["username"]) && isset($_POST["password"])) {
                $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
                
                /* Hämta användarens lödenord */
                /* Kontrolerar lösen */
                
                if (password_verify($password, $hashFile)) {
                    /* Success! */
                    echo "success!";
                    $_SESSION["anamn"] = $username;                        
                    header("Location: lista_db.php");
                } else {
                    echo "<p>Wrong Password</p>";
                }                    
            }
        ?>
        <p>Var good logga in</p>
        <form action="#" method="post">
            <label for=""></label>Username<input type="text" name="username"><br>
            <label for=""></label>Password<input type="password" name="password"><br>
            <button>Log in</button>
        </form>
    </div>
</body>
</html>