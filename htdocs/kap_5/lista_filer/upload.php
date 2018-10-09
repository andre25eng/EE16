<?php
/* Bäkrefta att knappen var klickad */
if (isset($_POST["submit"])) {
    $filen = $_FILES["filen"];
    $fileName = $filen["name"];
    print_r($filen);

    /* Plock filnamnet */
    $fileName = $filen["name"];
    echo "<p>Filens namn är $fileName</p>";

    /* Plocka filtyp */
    $fileType = $filen["type"];
    echo "<p>Filens namn är $fileType</p>";

    /* Plocka ut temporärt namn */
    $fileTmpName = $filen["tmp_name"];
    echo "<p>Filens namn är $fileTmpName</p>";

    /* Plocka ut filstorlek */
    $fileSize = $filen["size"];
    echo "<p>Storlek i byte är $fileSize</p>";

    /* Plocka ut felemedelande */
    $fileError = $filen["error"];
    echo "<p>Filen felmedelande är $fileError</p>";

    /*  */
    $fileExt = explode("image/", $fileType);
    echo "<p>Filens filändelse är $fileExt[1]</p>";

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
        echo "<p>Tillåten filtyp</p>";

        /* Nästa steg - blev något fel */
        if ($fileError == 0) {
            /* Skapa nytt unikt namn för att undvika fil överskrivning */
            $fileNewName = uniqid("", true) . "." . $fileExt[1];
            /* Hella sökvägen för bilden */
            $fileDestination = "bilder/$fileNewName";
            echo "<p>$fileDestination</p>";
            /* Nedladdning av fil */
            move_uploaded_file($fileTmpName, $fileDestination);
            echo "<p>Uppladning lyckades!</p>";
            /* warp till första sidan */
            header("Location: filluppladning.php?uploadsuccess");
        } else {
            echo "<p>Något gick fel: $errors[$fileError]</p>";
        }
        
    } else {
        echo "<p>Icke tillåten filltyp!</p>";
    }


}
?>