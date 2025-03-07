<?php

$quotes = array(
    "The only way to do great work is to love what you do.",
    "Believe you can and you're halfway there.",
    "The future depends on what you do today."
);

// Generate a random number between 0 and the length of the quotes array - 1
$randomQuote = $quotes[mt_rand(0, count($quotes) - 1)];

// Display the quote on the page
echo "<p>" . $randomQuote . "</p>";
