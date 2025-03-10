
<?php

// Connect to the database
$conn = mysqli_connect("localhost", "myuser", "mypassword", "mydb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database for data
$result = mysqli_query($conn, "SELECT * FROM mytable");

// Loop through the results and display them
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["myfield"] . "\n";
}

// Close the connection
mysqli_close($conn);

?>