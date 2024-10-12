<?php
//Justine Gail Valdez 186710705, Activity 5: Sum of Numbers

// Initialize the starting number
$number = 1;

// Initialize the sum to 0
$sum = 0;

// Use a while loop to iterate from 1 to 100
while ($number <= 100) {
    // Add the current number to the sum
    $sum += $number;

    // Increment the number by 1 for the next iteration
    $number++;
}

// Display the result
echo "The sum of numbers from 1 to 100 is: " . $sum;


?>