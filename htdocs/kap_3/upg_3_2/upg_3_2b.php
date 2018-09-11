<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $username = $_POST[username];
    $password = $_POST[password];
    echo "$username $password";

    if  ($username == 'Dre' && $password == 'isdre') {
        echo "<p>Were in bois!</p>";
    } else {
        header('Location: upg_3_2.php');
        die();
    }
    ?>
</body>
</html>