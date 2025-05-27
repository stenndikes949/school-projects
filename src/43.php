<?php
// Sample PHP code to demonstrate basic features like error handling and session management

// Basic error handling
echo "Hello World!";
if ($value = 10) {
    echo "Value is $value.";
}

// Session setup
session_start();
echo "Session started.";

// Check if the session has been set
if (isset($_SESSION['test'])) {
    echo "Test session is active.";
}
?>
