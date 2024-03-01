<?php
session_start();
require_once ('../../db.php');

// a function to trim strings
function validate($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $email = strtolower(validate($_POST['EMAIL'])); // from the html form named EMAIL
    $password = md5(validate($_POST['PASSWORD'])); // we used md5 for security and from the html form named PASSWORD


    $select = "SELECT * FROM `accounts` WHERE `email`= '$email' AND `password` = '$password'"; // query that selects all existing accounts from our database
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        //if the query finds out that the data we passed from frontend matches from the database it performs a row query
        $row = mysqli_fetch_array($result);

        if ($row['email'] === $email && $row['password'] === $password) {
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            // if this all matched then the application will change the page to client page
            header('location: ../../pages/home.php');
            exit();
        } else {
            header('location: ../../index.php?error=Incorrect Password or Email');
        }
    } else {
        header('location: ../../index.php?error=Incorrect Password or Email');
    }

}