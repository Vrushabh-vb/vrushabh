<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title> An About Us Page | CoderGirl </title>
 <link rel="stylesheet" type="text/css" href="./css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

 <?php require 'navbar.php' ?>
 <style>

  *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    .about-us{
      height: 100vh;
      width: 100%;
      padding: 90px 0;
      background: #ddd;
    }
    .pic{
      height: auto;
      width:  302px;
    }
    .about{
      width: 1130px;
      max-width: 85%;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-around;
    }
    .text{
      width: 540px;
    }
    .text h2{
      font-size: 90px;
      font-weight: 600;
      margin-bottom: 10px;
    
    }
    .text h5{
      font-size: 22px;
      font-weight: 500;
      margin-bottom: 20px;
    }
    span{
      color: #4070f4;
    }
    .text p{
      font-size: 18px;
      line-height: 25px;
      letter-spacing: 1px;
    }
    .data{
      margin-top: 30px;
    }
    .hire{
      font-size: 18px;
      background: #4070f4;
      color: #fff;
      text-decoration: none;
      border: none;
      padding: 8px 25px;
      border-radius: 6px;
      transition: 0.5s;
    }
    .hire:hover{
      background: #000;
      border: 1px solid #4070f4;
    }
    </style>

</head>
<body>
  <section class="about-us">
    <div class="about">
      <!--<img src="girl.png" class="pic">-->
      <div class="text">
        <h2>About Us</h2>
        <h5>Welcome to job portal! <span></span></h5>
          <p>

           GetJob is a free online job board that connects job seekers with employers. We offer a wide variety of jobs in all industries, from entry-level to executive positions. Whether you are looking for a new job or are looking to hire top talent, [job portal name] can help.
            
            We are committed to providing a user-friendly and efficient platform for both job seekers and employers. Our website is easy to navigate and our search tools make it easy to find the perfect job or candidate. We also offer a variety of features to help job seekers and employers connect, including:
            
            Job postings: Employers can post their job openings for free.
            Resumes: Job seekers can upload their resumes and receive job alerts.
            Message boards: Job seekers and employers can connect and communicate on our message boards.
            Career advice: We offer a variety of career advice articles and resources to help job seekers and employers.
            We are constantly working to improve our website and services. If you have any feedback or suggestions, please do not hesitate to contact us.
            
            Thank you for visiting [job portal name]!
            
            Here are some additional things you can mention in the about section:
            
            The number of jobs that are currently listed on the site.
            The industries that are represented on the site.
            The geographic locations where jobs are available.
            The features that make your job portal unique.
            The benefits of using your job portal for job seekers and employers.
            Your commitment to providing a user-friendly and efficient platform.
            I hope this helps!</p>
        <div class="data">
        <a href="#" class="hire"></a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>