<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regestrering administarör</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Shopsmart</h1>
        </header>
        <main>
            <?php
            /* Ta emot data och filtrera */
            if (isset($_POST["username"]) && isset($_POST["password"])) {
                $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

                /* Spara ned ny rad som anamn¤losen i filen admin.txt*/
                $handtag = fopen($_SERVER["DOCUMENT_ROOT"] . "/../config/admin.txt", "a");
                $hash = password_hash($password, PASSWORD_DEFAULT);
                fwrite($handtag, $username . '¤' . $hash . PHP_EOL);
                fclose($handtag);

                echo "<script>alert('Använadren har regesrerats')</script>";
            }
            ?>


            <form action="#" method="post">
                <label for=""></label>Username<input type="text" name="username"><br>
                <label for=""></label>Password<input type="password"    name="password"><br>
                <button>Skappakonto</button>
            </form>
        </main>
        <footer>
        
        </footer>
    </div>
</body>
</html>