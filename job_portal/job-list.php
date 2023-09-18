
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/home.css">
  <title>Job List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .job-list {
      list-style-type: none;
      padding: 0;
    }

    .job-item {
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
      padding: 10px;
      display: flex;
    }

    .job-item img {
      width: 100px;
      height: 100px;
      margin-right: 10px;
      border-radius: 5px;
    }

    .job-item h3 {
      margin-top: 0;
    }

    .job-item p {
      margin: 5px 0;
    }

    .job-item .apply-btn {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 8px 16px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 5px;
    }
  </style>
</head>
<body>
      <!-- Navbar-->
      <?php include('navbar.php'); ?>

  <h1>Job List</h1>

  <ul class="job-list">
    <li class="job-item">
      <img src="./images/amazon-logo.jpeg" alt="Job 1" />
      <div>
        <h3>Amazon</h3>
        <p>Company: Company A</p>
        <p>Location: City A</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="apply-btn">Apply</a>
      </div>
    </li>
    <li class="job-item">
      <img src="./images/ibm.png" alt="Job 2" />
      <div>
        <h3>IBM</h3>
        <p>Company: Company B</p>
        <p>Location: City B</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="apply-btn">Apply</a>
      </div>
    </li>
    <li class="job-item">
      <img src="./images/apple.png" alt="Job 3" />
      <div>
        <h3>Apple</h3>
        <p>Company: Company C</p>
        <p>Location: City C</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="apply-btn">Apply</a>
      </div>
    </li>
  </ul>
      <!-- footer-->
      <?php include('footer.php'); ?>

</body>
</html>
