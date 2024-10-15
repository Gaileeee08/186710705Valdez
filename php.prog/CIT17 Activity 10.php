<?php
//Justine Gail Valdez 186710705, Activity 10: Prime Number Checker

// Function to check if a number is prime
function isPrime(int $number): bool
{
    // Numbers less than 2 are not prime
    if ($number < 2) {
        return false;
    }

    // Use a for loop to check divisibility from 2 up to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        // If the number is divisible by any number other than 1 and itself, it's not prime
        if ($number % $i === 0) {
            return false; // Return false if divisible
        }
    }

    // If no divisors were found, the number is prime
    return true;
}

// Example number (input from the user can be taken using other methods)
$number = 17; // Replace this with any number you'd like to check

// Call the function to check if the number is prime
if (isPrime($number)) {
    echo "{$number} is a prime number."; // Print if the number is prime
} else {
    echo "{$number} is not a prime number."; // Print if the number is not prime
}



?>