<?php
// Define variables and constants
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_projects";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "\n";
  }
} else {
  echo "0 results";
}

// Close connection
$conn->close();
?>
