<?php

include("../config/configure.php");
if (isset($_POST['user_sign_up'])) {
    $first_name = htmlentities(mysqli_real_escape_string($con, $_POST['first_name']));
    $middle_name = htmlentities(mysqli_real_escape_string($con, $_POST['middle_name']));
    $last_name = htmlentities(mysqli_real_escape_string($con, $_POST['last_name']));
    $city = htmlentities(mysqli_real_escape_string($con, $_POST['city']));
    $state = htmlentities(mysqli_real_escape_string($con, $_POST['city']));
    $zipcode = htmlentities(mysqli_real_escape_string($con, $_POST['zipcode']));
    $user_email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
    $user_email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
    $user_birthday = htmlentities(mysqli_real_escape_string($con, $_POST['user_birthday']));
    $user_phone = htmlentities(mysqli_real_escape_string($con, $_POST['user_phone']));
    $user_phone = htmlentities(mysqli_real_escape_string($con, $_POST['user_phone1']));
    $user_pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
    $user_pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass1']));
    $age = 80;

    $insert = "insert into users (first_name, middle_name, last_name, city, state, zipcode, email, dob, password, age)
    values('$first_name', '$middle_name', '$last_name', '$city', '$state', '$zipcode', '$user_email',
    'user_birthday', '$user_pass', $age) ";

    $insert_query = mysqli_query($con, $insert);
    if ($insert_query) {
        echo "<script>alert('$first_name, your registration is completed')</script>";
    } else {
        echo "<script>alert('Bad Luck')</script>";
    }
}
