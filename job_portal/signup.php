<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require 'dbconnect.php';
  $username = $_POST["username"];
  $email = $_POST["email"];

    $sql = "INSERT INTO `signup` (`username`, `email`) VALUES ('$username', '$email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      
      header("Location: login.php");
      
      exit();
    }
  }

?>
 

<!DOCTYPE html>
<!-- ... (your HTML code remains unchanged) ... -->

<!DOCTYPE html>
<html>
<head>
  <title>Job Portal - Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

  <link rel="stylesheet" href="./css/home.css" />
  <style>
    @media (min-width: 992px) {
      .rounded-lg-3 {
        border-radius: 0.3rem;
      }
    }
  </style>
</head>

<body data-bs-theme="dark">
  <?php require 'navbar.php' ?>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Sign-Up</h1>
        <p class="col-lg-10 fs-4">Sign-Up By Your Email and Password!</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="username" />
            <label for="floatingPassword">username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" />
            <label for="floatingInput">Email address</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me" /> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">
            Sign up
          </button>
          <hr class="my-4" />
          <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>

  <!-- script -->
  <script src="/js/script.js"></script>

</body>

</html>