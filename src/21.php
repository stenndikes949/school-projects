<?php
// Example PHP code for generating random data
function generate_random_data($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $random_string;
}

// Example usage
$random_data_length = 8;
echo "Random data: " . generate_random_data($random_data_length);
?>
