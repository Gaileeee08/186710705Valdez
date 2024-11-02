<?php
//Justine Gail Valdez 186710705, Activity 6: Array Iteration with foreach

// Create an array with 5 favorite movies
$movies = [
    "The Shawshank Redemption", 
    "Inception", 
    "The Dark Knight", 
    "Interstellar", 
    "Parasite"
];

// Initialize a counter to display the movie number
$counter = 1;

// Use a foreach loop to iterate through the movies array
foreach ($movies as $movie) {
    // Print the movie number followed by the movie name
    echo "{$counter}. {$movie}" . PHP_EOL;

    // Increment the counter for the next movie
    $counter++;
}


?>