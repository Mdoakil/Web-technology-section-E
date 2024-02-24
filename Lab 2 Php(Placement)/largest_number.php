<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$x = 12;
$y = 7;
$z = 15;


if ($x > $y && $x > $z) {
    echo "The largest number among three is: $x";
} elseif ($y > $z) {
    echo "The largest number among three is: $y";
} else {
    echo "The largest number among three is: $z";
}
?>

    
</body>
</html>