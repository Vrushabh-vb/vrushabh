<?php require 'navbar.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <link rel="stylesheet" type="text/css" href="./css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


  <style>.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  
  </style>
</head>
<body>
  <div class="container py-3">
    <h2 py-3>User Registration Form</h2>
    <form method="post" action="" enctype="multipart/form-data">
      <label for="profile_picture">Profile Picture:</label>
      <input type="file" id="profile_picture" name="profile_picture" accept="image/*"><br>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="about">About:</label>
      <textarea id="about" name="about"></textarea><br>

      <label for="contact">Contact:</label>
      <input type="text" id="contact" name="contact" required><br>

      <label for="location">Location:</label>
      <input type="text" id="location" name="location" required><br>

      <label for="experience">Fresher/Experience:</label>
      <select id="experience" name="experience">
        <option value="Fresher">Fresher</option>
        <option value="Experience">Experience</option>
      </select><br>

      <label for="education">Education:</label>
      <input type="text" id="education" name="education" required><br>

      <label for="skills">Skills:</label>
      <input type="text" id="skills" name="skills" required><br>

      <button type="submit">submit</button>
    </form>
  </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require 'dbconnect.php';
  $name = $_POST["name"];
  $about = $_POST["about"];
  $contact = $_POST["contact"];
  $location = $_POST["location"];
  $experience = $_POST["experience"];
  $education = $_POST["education"];
  $skills = $_POST["skills"];

  if($password == $password) {
    $sql = "INSERT INTO `profile` ( `name`, `about`,`contact`,`location`,`experience`,`education`,`skills`) VALUES('$name', '$about','$contact','$location','$experience','$education','$skills')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
      
    }
    echo '<div class="alert alert-success" role="alert">
      Successfully Registred!!
    </div>';
  }

  //redirect("index.html",false);
}
?>


