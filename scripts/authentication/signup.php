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

    if ((!preg_match('/@gmail\.com$/', $email))) {
        header("location: ../../signup.php?error=Invalid Gmail");
    } else if (mysqli_num_rows($query_all) > 0) {
        header("location: ../../signup.php?error=Account already registered");
    } else if (mysqli_num_rows($query_email) > 0) {
        header("location: ../../signup.php?error=Gmail already in use");
    } else if ($password != $repassword) {
        header("location: ../../signup.php?error=Password must match");
    } else if (strlen($password && $repassword) < 7) {
        header("location: ../../signup.php?error=Password must be 8 character");
    } else {
        mysqli_query($conn, "INSERT INTO accounts (`fullname`, `email`, `password`) VALUE ('$fullname', '$email', '$password')");
        header("location: ../../signup.php?success=account registered!");
    }
}
