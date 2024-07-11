<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
///array_map
$originalArray = ["apple", "banana", "cherry"];

$uppercaseArray = array_map('strtoupper', $originalArray);

print_r($uppercaseArray);

///array_filter
$numbers = [1, 2, 3, 4, 5, 6, 7];

$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

print_r($evenNumbers);
 
////array_reduce
$numbers = [1, 2, 3, 4, 5];

$totalSum = array_reduce($numbers, function($accumulator, $currentValue) {
    return $accumulator + $currentValue;
}, 0);

echo "Sum of array: " . $totalSum . "\n";


////array_walk
$numbers = [1, 2, 3, 4, 5];

array_walk($numbers, function(&$value, $key) {
    $value *= 2;
});

print_r($numbers);
////array_diff
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$difference = array_diff($array1, $array2);

print_r($difference);


////array_intersect
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$intersection = array_intersect($array1, $array2);

print_r($intersection);


///array_combine
$keys = ["a", "b", "c"];
$values = [1, 2, 3];

$combinedArray = array_combine($keys, $values);

print_r($combinedArray);


////array_column
$students = [
    ["id" => 1, "name" => "John", "age" => 20],
    ["id" => 2, "name" => "Jane", "age" => 22],
    ["id" => 3, "name" => "Doe", "age" => 21]
];

$names = array_column($students, 'name');

print_r($names);


///array_slice
$fruits = ["apple", "banana", "cherry", "date", "elderberry"];

$slicedArray = array_slice($fruits, 1, 3);

print_r($slicedArray);

////in_array
$fruits = ["apple", "banana", "cherry"];

if (in_array("banana", $fruits)) {
    echo "Found 'banana' in the array\n";
} else {
    echo "Did not find 'banana' in the array\n";
}
    ?>
</body>
</html>