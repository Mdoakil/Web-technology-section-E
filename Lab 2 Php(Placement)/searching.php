<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$myArray = array("Rahim", "Karim", "oakil", "joy", "Nafiz");


$searchElement = "Nafiz";


$found = false;
foreach ($myArray as $key => $value) {
    if ($value === $searchElement) {
        echo "Found '$searchElement' at index $key in the array.\n";
        $found = true;
        break; 
    }
}

if (!$found) {
    echo "'$searchElement' not found in the array.\n";
}


$key = array_search($searchElement, $myArray);
if ($key !== false) {
    echo "Using array_search(): Found '$searchElement' at index $key in the array.\n";
} else {
    echo "Using array_search(): '$searchElement' not found in the array.\n";
}
?>

    
</body>
</html>