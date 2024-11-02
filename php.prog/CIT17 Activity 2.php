<?php
//Justine Gail Valdez 186710705, Activity 2: Password Validator

// Set the correct password
$correctPassword = "password123";
$userPassword = " ";

// Start the do while loop

do{
    // Ask the user to input a password
    echo "Please enter the password: ";

    // Get the user input from the command line
    // In a web environment, you would use a form instead of reading input like this

    $userPassword = trim(fgets(STDIN)); // trim () to remove extra whitespace

    // Check if the entered password is correct
    if ($userPassword !== $correctPassword){
        //IF the password is wrong, print an error message
        echo "Incorrect password.\n";        
    }
} while ($userPassword !== $correctPassword);
        // IF the password is correct, print a message, keep looping until the correct password is entered
    echo "Access Granted. \n";



?>