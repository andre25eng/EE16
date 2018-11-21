<!-- 
1. Man ska kunna skriva en lång text i ett formulär med knapp "Spara".
2. När man klickat på "Spara" lagras texten i en textfil.
3. När man tar upp sidan igen visas senast sparade texten.
4. Skydda webbappen mot hot.
5. Infoga felhantering.
 -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The boring Textedirot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Text Editor</h1>
    </header>
    <main>
        <?php 
            if (isset($_POST["text"])) {
                $text = filter_input(INPUT_POST,"text", FILTER_SANITIZE_STRING);

                $handtag = fopen("thetext.txt", "w") or die("<p>Text filen kunde inte öppnas.</p>");
                fwrite($handtag, $text . PHP_EOL);
                fclose($handtag);

                $savedtext = file_get_contents("thetext.txt");
                echo "<script defer src=\"script.js\"></script>";
            } else {
                $savedtext = file_get_contents("thetext.txt");
            }
        ?>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <p>File uploaded</p>
            </div>
        </div>
        <div id="maindiv">
            <form action="#" method="post">
                <label>Your text</label><br> 
                <textarea name="text" id="text" cols="30" rows="10"><?php echo "$savedtext" ?></textarea><br>
                <button id="submit">Upload</button>
            </form>
        </div>
    </main>
    <footer>
        <p>André Englund 21/11/2018</p>
    </footer>
</body>
</html>