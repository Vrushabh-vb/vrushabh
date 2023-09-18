<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require 'dbconnect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $count = 0;
  $sql = "select username,password from `admin_login` where username='admin' and password='123'";
  $query = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_row($query)) {
    $count++;
  }
  if ($username == 'admin' && $password == '123') {
    echo "<script>window.location.href='Admin.php'</script>";
  } else {
    echo "<script>alert('Invalid username or password');</script>";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin Login Page</title>
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

  <!-- inheriting navbar -->
  <?php require 'navbar.php' ?>

  

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Admin Login</h1>
        <p class="col-lg-10 fs-4">Login By Your Username and Password!</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" />
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" />
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me" name="remember" /> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit ">
            Log In
          </button>
          <hr class="my-4" />
          <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
  <!-- dark mode 
     <div class="form-check form-switch">
      <input
        class="form-check-input"
        type="checkbox"
        role="switch"
        id="flexSwitchCheckChecked"
        checked 
        onclick="myFunction()"
      /> 
       <label class="form-check-label" for="flexSwitchCheckChecked"></label> -->
  <!-- </div> -->

  <!-- script -->
  <script src="/js/script.js"></script>
  <link rel="stylesheet" href="db/user_login.php">

</body>

</html>