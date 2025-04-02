<?php
// Define your project details here
$project_name = "School-Projects";
$project_description = "A collection of school projects";

// Create an array to hold all project files
$projects = [
    "index.php",
    "tutorial.php",
    // Add more project files as needed
];

// Loop through the projects and print their paths
foreach ($projects as $file) {
    echo "<a href='" . $project_name . '/' . $file . "' target='_blank'>" . $file . "</a><br>";
}
?>
