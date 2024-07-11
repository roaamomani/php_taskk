<?php
$people = array(
    "Alice" => 30,
    "Bob" => 25,
    "Charlie" => 35,
    "David" => 28,
    "Eve" => 32
);


echo "Step 2: All key-value pairs in the array:\n";
foreach ($people as $name => $age) {
    echo "$name is $age years old.\n";
}


$newPerson = "Frank";
$people[$newPerson] = 27;

echo "\nStep 3: Added $newPerson to the array. Updated array:\n";
foreach ($people as $name => $age) {
    echo "$name is $age years old.\n";
}

$personToRemove = "Charlie";
unset($people[$personToRemove]);

echo "\nStep 4: Removed $personToRemove from the array. Updated array:\n";
foreach ($people as $name => $age) {
    echo "$name is $age years old.\n";
}

$searchKey = "Bob";
if (array_key_exists($searchKey, $people)) {
    echo "\nStep 5: Key '$searchKey' exists in the array.\n";
} else {
    echo "\nStep 5: Key '$searchKey' does not exist in the array.\n";
}
