<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chatt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $namn = "";

        if (isset($_POST["losen"])) {
            $losen = filter_input(INPUT_POST, "losen", FILTER_SANITIZE_STRING);

            if ($losen == "1235") {
                if (isset($_POST["namn"]) && isset($_POST["meddelande"])) {
                    $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
                    $meddelande = filter_input(INPUT_POST, "meddelande", FILTER_SANITIZE_STRING);

                    $tid = date("h:i");

                    $handtag = fopen("chatt.txt", "a+");    
                    fwrite($handtag, "$tid $namn : $meddelande" . PHP_EOL);
                    fclose($handtag);
            }
        } else {
            echo "<script>alert(\"Fel lösenord!\");
            </script>";
        }
    }    
    ?>
    <div class="kontainer">
        <h1><?php
        echo $_SERVER["SERVER_ADDR"]
        ?></h1>
        <form action="#" method="post">
            <label>Namn</label><br> 
            <input type="text" name="namn" id="namn" placeholder="Ditt namn" value="<?php
            echo $namn;
            ?>">
            <input type="password" name="losen" id="losen" placeholder="Ange lösenordet" value="">
            <textarea id="chatt" cols="30" rows="10" readonly><?php
            echo file_get_contents("chatt.txt");
            ?></textarea>
            <input type="text" name="meddelande" id="meddelande" placeholder="Ditt meddelande">
            <button>Skicka</button>
        </form>
    </div>
    <script src="chatt.js"></script>
</body>
</html>