<?php
//Justine Gail Valdez 186710705, Activity 8: Factorial Calculator

// Function to calculate the factorial of a number
function calculateFactorial(int $number): int
{
    // Initialize the factorial result to 1
    $factorial = 1;

    // Use a for loop to multiply the number by each number below it
    for ($i = $number; $i > 0; $i--) {
        $factorial *= $i; // Multiply the current value of $factorial by $i
    }

    // Return the final factorial result
    return $factorial;
}

// The number for which you want to calculate the factorial
$number = 5;

// Call the function and store the result
$result = calculateFactorial($number);

// Display the factorial result
echo "Factorial of {$number} is: {$result}";



?>