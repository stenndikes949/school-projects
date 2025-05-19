<?php
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
$sql = "SELECT * FROM projects ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);

echo "<table><tr><th>Project</th><th>Description</th><th>Status</th></tr>";
while ($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["status"] . "</td></tr>";
}
$conn->close();
echo "</table>";
?>
