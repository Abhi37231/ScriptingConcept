<?php

// Create Array
$fruits = array("Apple", "Banana", "Mango");
echo "Original Array: ";
print_r($fruits);
echo "<br><br>";

// Count Elements
echo "Count: " . count($fruits);
echo "<br><br>";

// Add Element at End
array_push($fruits, "Orange");
echo "After array_push: ";
print_r($fruits);
echo "<br><br>";

// Remove Last Element
array_pop($fruits);
echo "After array_pop: ";
print_r($fruits);
echo "<br><br>";

// Add Element at Beginning
array_unshift($fruits, "Grapes");
echo "After array_unshift: ";
print_r($fruits);
echo "<br><br>";

// Remove First Element
array_shift($fruits);
echo "After array_shift: ";
print_r($fruits);
echo "<br><br>";

// Sort Array
sort($fruits);
echo "After sort: ";
print_r($fruits);
echo "<br><br>";

// Reverse Sort
rsort($fruits);
echo "After rsort: ";
print_r($fruits);
echo "<br><br>";

// Search in Array
if (in_array("Banana", $fruits)) {
    echo "Banana Found";
} else {
    echo "Banana Not Found";
}
echo "<br><br>";

// Merge Arrays
$moreFruits = array("Pineapple", "Papaya");
$merged = array_merge($fruits, $moreFruits);
echo "After array_merge: ";
print_r($merged);
echo "<br><br>";

// Associative Array
$student = array(
    "name" => "Vivek",
    "age" => 21,
    "city" => "Pune"
);

echo "Student Name: " . $student["name"];
echo "<br><br>";

// Loop Through Array
echo "Loop Through Fruits:<br>";
foreach ($merged as $fruit) {
    echo $fruit . "<br>";
}

?>