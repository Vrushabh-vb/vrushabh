<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      
        .contact-form {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <!-- Navbar-->
    <?php include('navbar.php'); ?>

    <div class="container">
        <h1 class="mt-5">Contact Us</h1>
        <p>If you have any questions or feedback, please feel free to contact us using the form below.</p>

        <div class="row">
            <div class="col-md-6">
                <!-- Contact Form -->
                <form class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <!-- Contact Information -->
                <h3>Contact Information</h3>
                <ul class="list-unstyled">
                    <li><strong>Address:</strong> Your Company Address</li>
                    <li><strong>Email:</strong> <a href="mailto:info@example.com">info@example.com</a></li>
                    <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer (if you have one) -->
    <?php include('footer.php'); ?>

    <!-- Add Bootstrap JS (jQuery and Popper.js required as well) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+JnxU6wzXC8s5D1nFPFO6j5KXx8xg1yku2K1QDd2iexl5z5C" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
