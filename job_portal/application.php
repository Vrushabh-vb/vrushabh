<?php
require 'navbar.php';
require 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $resume = $_FILES['resume'];
   // Prepare the SQL statement
   $sql = "INSERT INTO application (name, email, phone,resume) VALUES ('$name', '$email', '$phone','$resume')";

   // Execute the query
   if ($conn->query($sql) === TRUE) {
       echo "Job Applyed successfully!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

//  getting details from card



  // Check if file was uploaded successfully
  if ($resume['error'] === UPLOAD_ERR_OK) {
    $resumeName = $resume['name'];
    $resumeTmpName = $resume['tmp_name'];
    $resumeSize = $resume['size'];
    $resumeType = $resume['type'];

    // Move the uploaded file to a desired location
    $uploadDir = 'resumes/';
    $resumePath = $uploadDir . $resumeName;
    move_uploaded_file($resumeTmpName, $resumePath);

    // Save the application details to a database or perform other operations
    // Here, we'll simply display the submitted data
    echo "<h1>Application Submitted Successfully</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Resume: <a href='$resumePath'>$resumeName</a></p>";
  } else {
    echo "Error uploading the resume.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Apply for Job</title>
  <link rel="stylesheet" type="text/css" href="./css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <style>.container {
  width: 400px;
  margin: 0 auto;
}

h1 {
  text-align: center;
}

label {
  display: block;
  margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="file"] {
  width: 100%;
  padding: 5px;
  margin-top: 5px;
}

input[type="submit"] {
  margin-top: 10px;
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  width: 100%;
  border: none;
}
</style>
</head>
<body>
  <div class="container p-3">
    <h1>Job Application</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" required>

      <label for="resume">Resume:</label>
      <input type="file" id="resume" name="resume" accept=".txt,.pdf,.doc,.docx" required>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
