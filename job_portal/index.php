<?php require 'dbconnect.php';
$sql = "SELECT * FROM image";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/home.css">
    <style></style>
</head>

<body data-bs-theme="">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadown p-3 sunrise-city sticky-top text-light">
    <div class="container-fluid">
        <div class="newhoiver">
            <a class="navbar-brand" class="text-light bg-dark" href="#"><b>GetJobs</b></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_login.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Register</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="job-list.php" aria-expanded="false">Jobs List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <div class="account">
                <?php
                // Check if the user is logged in
                session_start();
                if (isset($_SESSION['username'])) {
                    echo '<img src="images/profile.png" alt="" width="30px"><a href="#" class="btn"><b>' . $_SESSION['username'] .'</b>'. '</a>';
                    echo '<a class="btn" href="logout.php">Log Out</a>'; // Include Log Out link
                } else {
                    echo '<a href="login.php" class="btn">Login</a>';
                    echo '<a href="signup.php" class="btn">Sign-Up</a>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>



    <!-- Seach bar-->
    <div class="container my-5 py-5 px-3 border border-2 shadow rounded bg-body-secondary text-center">
        <h2><b>Job Portal</b></h2>
        <p>Search for Jobs</p>
        <form class="d-flex" role="search">
            <input class="form-control me-2 p-2 " id="keyword" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit" onclick="search()">Search</button>
        </form>
    </div>


    <!-- top recruters -->
    <div class="bmsTop container" style="text-align: center;">
        <h3 style="font-family:Arial, Helvetica, sans-serif;">Top Recruiters:</h2>
            <marquee behavior="" direction="">
                <ul>
                    <li style="margin: 10px 20px;"><a href="https://www.google.com" target="_blank">
                            <img src="images/1.gif" style="width: 15%;">
                        </a></li>
                    <li style="margin: 10px 20px;"><a href="#" target="_blank">
                            <img src="images/2.gif" style="width: 15%;">
                        </a></li>
                    <li style="margin: 10px 20px;"><a href="#" target="_blank">
                            <img src="images/3.gif" style="width: 15%;"></a>
                    </li>
                    <li style="margin: 10px 20px;"><a href="#" target="_blank">
                            <img src="images/4.gif" style="width: 15%;; object-fit: cover;"></a></li>
                    <li style="margin: 10px 20px;"><a href="#" target="_blank">
                            <img src="images/5.gif" style="width: 15%;"></a>
                    </li>
                </ul>
            </marquee>
    </div>

    <!-- Jobs -->
    <div class="container d-flex flex-wrap cardd">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="card mx-3 my-5 position-relative" style="width: 18rem;">
                    <img src="images/<?php echo $row['imagename']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
                    <div class="card-body d-flex flex-column ">
                        <h4 class="card-title"><?php echo $row['title']; ?></h4>
                        <div class="mt-auto">
                            <p class="card-text"><strong>Description: </strong><?php echo $row['desc']; ?></p>
                            <p class="card-text"><strong>Location: </strong><?php echo $row['location']; ?></p>
                            <input type="submit" value="Apply Now" class="btn btn-primary mt-auto apply-button">

                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No jobs found.";
        }
        ?>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Search.js -->
    <script src="/js/search.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
<div class="footer" style="margin-top: 2rem;"><?php include 'footer.php'; ?></div>
<script>
    $(document).ready(function() {
        $('.apply-button').click(function() {
            // Get job data from the card
            const card = $(this).closest('.card');
            const title = card.find('.card-title').text();
            const description = card.find('.card-text strong:contains("Description")').next().text();
            const location = card.find('.card-text strong:contains("Location")').next().text();

            // Send job data to the server using AJAX
            $.ajax({
                type: 'POST',
                url: 'apply.php', // Create a PHP script to handle the job application
                data: {
                    title: title,
                    description: description,
                    location: location,
                },
                success: function(response) {
                    // Display a success message (you can modify this as needed)
                    alert('Job applied successfully!');
                },
                error: function(error) {
                    // Handle any errors here
                    console.error(error);
                },
            });

            // Prevent the form from submitting
            return false;
        });
    });
</script>