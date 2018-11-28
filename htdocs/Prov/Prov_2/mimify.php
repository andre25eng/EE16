<?php
/*
* PHP version 7
* @category   CSS Minifier
* @author     André Englund
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSS minifier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <?php
            $code = "";
            $minifiedCode = "";
            $antTeckenIn = "";
            $antTeckenOut = "";

            if (isset($_POST["code"])) {
                $code = $_POST["code"];

                $minifiedCode = preg_replace('/\s+/', '', $code);

                $antTeckenIn = strlen($code);
                $antTeckenOut = strlen($minifiedCode);
            }
        ?>
        <div id="maindiv">
            <h1>CSS Minifier</h1>
            <form action="#" method="post">
                <label>Your CSS</label><br> 
                <textarea name="code" id="code" cols="80" rows="30"><?php echo "$code" ?></textarea><br>
                <button id="submit">Minify!</button><br>
            </form>
            <p><?php echo "Alntal tecken: $antTeckenIn" ?></p>

            <form action="#" method="post">
                <label>Your CSS Minified</label><br> 
                <textarea cols="80" rows="30"><?php echo "$minifiedCode" ?></textarea><br>
            </form>
            <p><?php echo "Alntal tecken: $antTeckenOut" ?></p>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>