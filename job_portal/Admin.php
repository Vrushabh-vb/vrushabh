<?php
include('dbconnect.php');
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    // Check if a file was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $img = mysqli_real_escape_string($conn, $_FILES['image']['name']);
        $img_tmp = $_FILES['image']['tmp_name'];

        // Insert query
        $sql = "INSERT INTO image (title, imagename, `desc`, location) VALUES ('$title', '$img', '$description', '$location')";

        if (mysqli_query($conn, $sql)) {
            move_uploaded_file($img_tmp, "images/$img");
            echo "<script>alert('Image has been uploaded successfully')</script>";
        } else {
            echo "<script>alert('Image could not be uploaded: " . mysqli_error($conn) . "')</script>";
        }
    } else {
        echo "<script>alert('No file was uploaded.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="./css/home.css">
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .container {
            padding: 3rem;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Navbar-->
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="display-4 mb-4">Upload a Job</h1>
                <form action="Admin.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Location" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Choose an Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Upload Job</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS (jQuery and Popper.js required as well) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+JnxU6wzXC8s5D1nFPFO6j5KXx8xg1yku2K1QDd2iexl5z5C" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php include 'footer.php'; ?>
</body>

</html>
