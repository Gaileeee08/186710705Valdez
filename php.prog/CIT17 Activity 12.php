<?php
//Justine Gail Valdez 186710705, Activity 12: Reverse a String

// The input string that needs to be reversed
$inputString = "Hello";

// Initialize an empty string to store the reversed result
$reversedString = "";

// Use a for loop to iterate through the input string in reverse order
for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
    // Append each character to the reversedString
    $reversedString .= $inputString[$i];
}

// Display the reversed string
echo "Input: \"{$inputString}\"\n";
echo "Output: \"{$reversedString}\"";

?>