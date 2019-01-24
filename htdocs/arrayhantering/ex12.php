<?php
/* 12. Write a PHP function to change the following array's all values to upper or lower case. 
Sample arrays : 
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output : 
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED )

*/
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
    <?php
        $color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

        foreach ($color as $key => $value) {
            $uppercase = strtoupper($value);
            echo "$uppercase <br>";
        }
        echo "<br>";

        foreach ($color as $key => $value) {
            $lowercase = strtolower($value);
            echo "$lowercase <br>";
        }
    ?>
</body>
</html>