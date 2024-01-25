<?php

require_once('../../db.php');

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = stripslashes($data);
    return $data;
}

if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $fullname = validate($_POST['FULLNAME']);
    $email = validate($_POST['EMAIL']);
    $password = validate(md5($_POST['PASSWORD']));
    $repassword = validate(md5($_POST['REPASSWORD']));

   

    $select_email = "SELECT * FROM `accounts` WHERE email = '$email' ";
    $select_all = "SELECT * FROM `accounts` WHERE fullname ='$fullname' AND email = '$email'";

    $query_email = mysqli_query($conn, $select_email);
    $query_all = mysqli_query($conn, $select_all);

    if (strlen($password) < 7) {
        header("location: ../../signup.php?error_password=Password must be 8 character");
    } else if ((!preg_match('/@gmail\.com$/', $email))) {
        header("location: ../../signup.php?error_gmail=Invalid Gmail");
    } else if (mysqli_num_rows($query_all) > 0) {
        header("location: ../../signup.php?already_registered=Account already registered");
    } else if (mysqli_num_rows($query_email) > 0) {
        header("location: ../../signup.php?gmail_use=Gmail already in use");
    } else if ($password != $repassword) {
        header("location: ../../signup.php?incorrect_password=Incorrect Password");
    } else {
        mysqli_query($conn, "INSERT INTO accounts (`fullname`, `email`, `password`) VALUE ('$fullname', '$email', '$password')");
        header("location: ../../signup.php?success=account registered!");
    }
}
