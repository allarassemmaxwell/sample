<?php 
	require_once('config/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us || Lifelink Clinic</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="banner">
        <div class="banner-text">Contact us</div>
    </div>

    <div class="contact-container">
        <div>
            <?php include('success.php'); ?><br>
        </div>
        <form class="contact-form" method="POST">
            <div>
                <label for="fname">First Name <span style="color: #a94442;">*</span></label>
                <input type="text" id="first_name" name="first_name" placeholder="First Name">
            </div>

            <div>
                <label for="fname">Last Name <span style="color: #a94442;">*</span></label>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name">
            </div>

            <div>
                <label for="fname">Email <span style="color: #a94442;">*</span></label>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>

            <div>
                <label for="fname">Subject <span style="color: #a94442;">*</span></label>
                <input type="text" id="subject" name="subject" placeholder="Subject">
            </div>

            <div>
                <label for="subject">Message <span style="color: #a94442;">*</span></label>
                <textarea id="message" name="message" placeholder="Message" style="height:200px"></textarea>
            </div>

            <input type="submit" name="add-contact" value="Submit">
        </form>
    </div>

    <?php include 'footer.php';?>

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/validation.js"></script>
</body>
</html>