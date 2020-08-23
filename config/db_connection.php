<?php
    session_start();

    // initializing variables
    $user_email   = "";
    $user_id   = "";
    $errors = array(); 

    // connect to the database
    $host     = "localhost"; 
    $user     = "root"; 
    $password = ""; 
    $dbname   = "viviana"; 

    $con = mysqli_connect($host, $user, $password,$dbname);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }




    // ADDING CONTACT
    if(isset($_POST['add-contact'])) {
        $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
        $last_name  = mysqli_real_escape_string($con, $_POST['last_name']);
        $email      = mysqli_real_escape_string($con, $_POST['email']);
        $subject    = mysqli_real_escape_string($con, $_POST['subject']);
        $message    = mysqli_real_escape_string($con, $_POST['message']);

        if (empty($first_name)) { array_push($errors, "First Name is required"); }
        if (empty($last_name))  { array_push($errors, "Last Name is required"); }
        if (empty($email))      { array_push($errors, "Email is required"); }
        if (empty($subject))    { array_push($errors, "Subject is required"); }
        if (empty($message))    { array_push($errors, "Message is required"); }

        if (count($errors) == 0) {
            $query = "INSERT INTO ContactUs (firstName, lastName, email, subject, message) VALUES('$first_name', '$last_name', '$email', '$subject', '$message')";
            $result = mysqli_query($con, $query);
            if (!$result) { 
                array_push($errors, "Error: Connection failed: $query");
            } else {
                $_SESSION['success'] = "Your message has been sent successfully. We will get back to you as soon as possible";
            }
        }
    }




    // ADDING APPOINTMENT
    if(isset($_POST['add-appointment'])) {
        $full_name      = mysqli_real_escape_string($con, $_POST['full_name']);
        $gender         = mysqli_real_escape_string($con, $_POST['gender']);
        $phone_number   = mysqli_real_escape_string($con, $_POST['phone_number']);
        $date_of_birth  = mysqli_real_escape_string($con, $_POST['date_of_birth']);
        $address        = mysqli_real_escape_string($con, $_POST['address']);
        $email          = mysqli_real_escape_string($con, $_POST['email']);
        $date           = mysqli_real_escape_string($con, $_POST['date']);
        $time           = mysqli_real_escape_string($con, $_POST['time']);

        if (empty($full_name))      { array_push($errors, "Full Name is required"); }
        if (empty($gender))         { array_push($errors, "Gender is required"); }
        if (empty($date_of_birth))  { array_push($errors, "Date of birth is required"); }
        if (empty($address))        { array_push($errors, "Address is required"); }
        if (empty($date))           { array_push($errors, "Date is required"); }
        if (empty($time))           { array_push($errors, "Time is required"); }

        if (count($errors) == 0) {
            $appointment_query = "INSERT INTO Appointment (full_name, gender, phone_number, date_of_birth, address, email, date, time) VALUES('$full_name', '$gender', '$phone_number', '$date_of_birth', '$address', '$email', '$date', '$time')";
            $appointment_result = mysqli_query($con, $appointment_query);
            if (!$appointment_result) { 
                array_push($errors, "Error: Connection failed: $appointment_query");
            } else {
                $_SESSION['success'] = "Your appointment has been received successfully.";
            }
        }
    }


?>