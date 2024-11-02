<?php
//Justine Gail Valdez 186710705, Activity 11: Fibonacci Sequence

// Initialize the first two numbers of the Fibonacci sequence
$first = 0;
$second = 1;

// Define how many Fibonacci numbers we want to generate
$count = 10;

// Initialize a counter for the loop
$index = 0;

// Use a while loop to generate the first 10 Fibonacci numbers
while ($index < $count) {
    // Print the current Fibonacci number
    echo $first . " ";

    // Calculate the next Fibonacci number as the sum of the previous two
    $next = $first + $second;

    // Move the second number to the first position
    $first = $second;

    // Move the next number to the second position
    $second = $next;

    // Increment the loop counter
    $index++;
}

?>