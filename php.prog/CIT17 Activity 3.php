<?php
//Justine Gail Valdez 186710705, Activity 3: Multiplication Table
// Enable strict typing mode, enforcing strict type rules for the script
declare(strict_types=1);

/**
 * Display the multiplication table for a given number.
 *
 * @param int $number The number for which the multiplication table will be generated.
 */
function displayMultiplicationTable(int $number): void
{
    // Use a for loop to iterate from 1 to 10
    for ($i = 1; $i <= 10; $i++) {
        // Calculate the result of the multiplication
        $result = $number * $i;
        
        // Output the multiplication in the format "number x i = result"
        echo "{$number} x {$i} = {$result}" . PHP_EOL; // PHP_EOL adds a new line in a cross-platform way
    }
}

// Call the function to display the multiplication table of 7
displayMultiplicationTable(7);

?>