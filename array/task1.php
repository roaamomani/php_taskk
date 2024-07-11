<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cities = array("New York", "Los Angeles", "Chicago", "Houston", "Phoenix", "Philadelphia", "San Antonio", "San Diego", "Dallas", "San Jose");


echo "Elements of the array in reverse order: <br>";
for ($i = count($cities) - 1; $i >= 0; $i--) {
    echo $cities[$i] . "<br>";
}


$cityToFind = "Chicago";
$index = array_search($cityToFind, $cities);
if ($index !== false) {
    echo "Index of '$cityToFind' in the array: $index <br>";
} else {
    echo "'$cityToFind' not found in the array. <br>";
}


$cityToRemove = "Phoenix";
$key = array_search($cityToRemove, $cities);
if ($key !== false) {
    unset($cities[$key]);
    echo "'$cityToRemove' has been removed from the array. <br>";
} else {
    echo "'$cityToRemove' not found in the array, so could not be removed. <br>";
}


$subArray = array_slice($cities, 0, 3);
echo "Sub-array of the first three cities: <br>";
print_r($subArray);
?>

</body>
</html>