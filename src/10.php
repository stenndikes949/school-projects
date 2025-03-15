<?php
// A simple web application that shows the current time and date
// using PHP's built-in DateTime class.

$date = new DateTime();
echo "The current date and time is: " . $date->format('m/d/Y H:i:s');
?>