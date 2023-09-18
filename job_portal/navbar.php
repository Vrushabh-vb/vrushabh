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
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="admin_login.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="profile.php">Register</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link " href="job-list.php" aria-expanded="false">
                        Jobs List
                    </a>
                </li>
                </div>
            <ul class="navbar-nav ms-auto"> <!-- Use ms-auto to push elements to the right -->
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
                        echo '<a href="./images/profile.png" class="btn">, ' . $_SESSION['username'] . '</a>';
                        // You can add a logout link here if you have a logout page
                    } else {
                        echo '<a href="login.php" class="btn">Login</a>';
                        echo '<a href="signup.php" class="btn">Sign-Up</a>';
                    }
                    ?>
                </div>

        </div>
                
        


        </div>
    </div>
</nav>