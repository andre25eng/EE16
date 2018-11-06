<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer nyVara">
        <header>
        <h1>Inloggning</h1>
            <nav>
                <a href="ny_vara.php">Ny Vara</a>
                <a href="login.php">Logga In</a>
                <a href="lista_vara.php">Handla</a>
            </nav>
        </header>
        <?php
        if (isset($_POST["username"])&& isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if  ($username == 'Dre' && $password == 'isdre') {
            echo "<p>Were in bois!</p>";
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