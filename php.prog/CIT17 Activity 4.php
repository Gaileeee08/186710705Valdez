<?php
//Justine Gail Valdez 186710705, Activity 4: Loop Control with break and continue

// Loop through numbers 1 to 10
for ($i = 1; $i <= 10; $i++) {
    // Use continue to skip the number 5
    if ($i === 5) {
        continue; // Skip the rest of the loop for this iteration when $i is 5
    }

    // Use break to stop the loop once we reach the number 8
    if ($i > 8) {
        break; // Exit the loop when $i is greater than 8
    }

    // Output the current number
    echo $i . " "; // Print the number followed by a space
}

?>