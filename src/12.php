
<?php
// A simple function to generate a random number between 1 and 10
function randomNumber() {
    return rand(1, 10);
}

// Function to print a message with a random number
function printMessage($message) {
    echo $message . " " . randomNumber();
}

// Call the function with a message and print the result
printMessage("Hello World!");
?>