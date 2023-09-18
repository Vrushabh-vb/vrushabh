
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg shadown p-3  sunrise-city sticky-top text-light">
        <div class="container-fluid">
            <div class="newhoiver">
                <a class="navbar-brand" class="text-light bg-dark" href="#"><b>Admin Page</b></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
                <div class="account text-align">
                    <a href="uploadjob.php" class="btn">Add Job</a>
                </div>
                <div class="account text-align">
                    <a href="index.php" class="btn">Log-Out</a>
                </div>

            </div>
        </div>
    </nav>
    <div class="container p-3">
        <h1>Add Job</h1>
        <hr>
        <form method="POST" action="add_job.php">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

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
        echo "Error: " . $sql . "<br>" ;//. $conn->error;
    }
}

$conn->close();
?>

