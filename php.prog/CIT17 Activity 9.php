<?php
//Justine Gail Valdez 186710705, Activity 9: FizzBuzz Challenge

// Use a for loop to iterate through numbers from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    // Check if the number is a multiple of both 3 and 5
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz "; // Print "FizzBuzz" for multiples of both 3 and 5
    }
    // Check if the number is a multiple of 3
    elseif ($i % 3 === 0) {
        echo "Fizz "; // Print "Fizz" for multiples of 3
    }
    // Check if the number is a multiple of 5
    elseif ($i % 5 === 0) {
        echo "Buzz "; // Print "Buzz" for multiples of 5
    }
    // If the number is not a multiple of 3 or 5, just print the number
    else {
        echo "{$i} "; // Print the number followed by a space
    }
}

?>