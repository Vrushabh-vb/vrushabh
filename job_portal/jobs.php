<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];

    // Prepare the SQL statement
    $sql = "INSERT INTO jobs (title, description, location) VALUES ('$title', '$description', '$location')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Job added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
