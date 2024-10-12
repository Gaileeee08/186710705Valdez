<?php
//Justine Gail Valdez 186710705, Activity 7: Key-Value Pairs with foreach


// Create an associative array with the student's information
$student = [
    "Name" => "Alice",  // Key is "Name", value is "Alice"
    "Age" => 20,        // Key is "Age", value is 20
    "Grade" => "A",     // Key is "Grade", value is "A"
    "City" => "Baguio"  // Key is "City", value is "Baguio"
];

// Use a foreach loop to iterate through the associative array
foreach ($student as $key => $value) {
    // Print the key and value in the format "Key: Value"
    echo "{$key}: {$value}" . PHP_EOL; // PHP_EOL adds a new line after each key-value pair
}

?>