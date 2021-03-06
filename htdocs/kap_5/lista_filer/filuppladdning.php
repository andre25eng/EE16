<?php
/*
* PHP version 7
* @category   Fill uppladning
* @author     André Englund
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filluppladning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    /* Bäkrefta att knappen var klickad */
    if (isset($_POST["submit"])) {
        $filen = $_FILES["filen"];
        $fileName = $filen["name"];

        /* Plock filnamnet */
        $fileName = $filen["name"];

        /* Plocka filtyp */
            $fileType = $filen["type"];

        /* Plocka ut temporärt namn */
       $fileTmpName = $filen["tmp_name"];

       /* Plocka ut filstorlek */
        $fileSize = $filen["size"];

       /* Plocka ut felemedelande */
       $fileError = $filen["error"];

        /*  */
        $fileExt = explode("image/", $fileType);

       /* Tillåtna fil typer */
       $allowedType = ["jpeg", "gif", "png", "pdf"];

       /* Felmedelanden */
        $errors = array(
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
            3 => 'The uploaded file was only partially uploaded.',
            4 => 'No file was uploaded.',
            6 => 'Missing a temporary folder.',
            7 => 'Failed to write file to disk.',
            8 => 'A PHP extension stopped the file upload.',
        );

        /* Är filen tillåten att va uppladdad */
        if (in_array($fileExt[1], $allowedType)) {

            /* Nästa steg - blev något fel */
            if ($fileError == 0) {
                /* Skapa nytt unikt namn för att undvika fil överskrivning */
                $fileNewName = uniqid("", true) . "." . $fileExt[1];
                /* Hella sökvägen för bilden */
                $fileDestination = "bilder/$fileNewName";
                /* Nedladdning av fil */
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "<script>alert(\"Uppladning lyckades\");</script>";
            } else {
                echo "<script>alert(\"Något gick fel: $errors[$fileError]\");</script>";
            }
            
        } else {
            echo "<script>alert(\"Icke tillåten filltyp!\");</script>";
        }
        }
?>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="filen">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
</body>
</html>