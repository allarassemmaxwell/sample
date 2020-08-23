<?php 
	require_once('config/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment || Lifelink Clinic</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="banner">
        <div class="banner-text">Appointment</div>
    </div>

    <div class="contact-container">
        <div>
            <?php include('success.php'); ?><br>
        </div>
        <form class="appointment-form" method="POST">
            <div>
                <label for="full_name">Full Name <span style="color: #a94442;">*</span></label>
                <input type="text" id="full_name" name="full_name" placeholder="Full Name">
            </div>

            <div>
                <label for="gender">Gender <span style="color: #a94442;">*</span></label>
                <select name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div>
                <label for="phone_number">Phone number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number">
            </div>

            <div>
                <label for="date_of_birth">Date of Birth <span style="color: #a94442;">*</span></label>
                <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth">
            </div>

            <div>
                <label for="address">Address <span style="color: #a94442;">*</span></label>
                <input type="text" id="address" name="address" placeholder="Address">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>

            <div>
                <label for="date">Date <span style="color: #a94442;">*</span></label>
                <input type="date" id="date" name="date" placeholder="Date">
            </div>

            <div>
                <label for="time">Time <span style="color: #a94442;">*</span></label>
                <input type="time" id="time" name="time" placeholder="Time">
            </div>

            <input type="submit" name="add-appointment" value="Submit form">
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