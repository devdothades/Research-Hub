<?php

require_once ('../../db.php');

function validate($data): string
{
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return trim($data);
}

$name = validate($_POST['name']);
$email = validate($_POST['email']);
$message = validate($_POST['message']);

if (!preg_match('/@gmail\.com$/', $email)) {
    header("location: ../../pages/home.php?error=Invalid Email!");
}else{
    mysqli_query($conn , "INSERT INTO messages(name, email, message) VALUES('$name', '$email', '$message')");
    header("location: ../../pages/home.php?success=Message Sent!");
}


