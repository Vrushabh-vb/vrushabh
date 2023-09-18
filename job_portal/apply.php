<?php
session_start();

// Access user data from sessions
if (isset($_SESSION['user_name']) && isset($_SESSION['user_email'])) {
    $user_name = $_SESSION['user_name'];
    $user_email = $_SESSION['user_email'];
} else {
    // Handle the case where user data is not set in the session
    echo 'Error: User data not found in the session.';
    exit; // You may choose to redirect or display an error message
}

// Access job application data (title, description, location) from the form
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['location'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];

    // Store the job application data and user data in the database

    // Redirect to a success page or back to the job listing page
} else {
    // Handle the case where job application data is not received
    echo 'Error: Job application data is missing.';
    exit; // You may choose to redirect or display an error message
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Confirmation</title>
    
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Job Application Confirmation</h1>
        <div class="alert alert-success mt-3" role="alert">
            <h4 class="alert-heading">Congratulations, <?php echo $user_name; ?>!</h4>
            <p>You have successfully applied for the following job:</p>
            <ul>
                <li><strong>Title:</strong> <?php echo $title; ?></li>
                <li><strong>Description:</strong> <?php echo $description; ?></li>
                <li><strong>Location:</strong> <?php echo $location; ?></li>
            </ul>
            <hr>
            <p class="mb-0">Thank you for using our job portal.</p>
        </div>
    </div>
    
    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
