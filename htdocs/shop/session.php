<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Session</h1>
    <ul>
        <li><a href="session.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>

<?php

$_SESSION["username"] = "dre";
echo $_SESSION["username"];

if (!isset($_SESSION["username"])) {
    echo "Not logged in!";
} else {
    echo "Logged in!";
}

?>
</body>
</html>