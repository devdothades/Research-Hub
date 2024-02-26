<?php
require_once ('../../../db.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['USERNAME'];
    $password = md5($_POST['PASSWORD']);

    $select = "SELECT * FROM `admin` WHERE `username`= '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        if ($row['username'] === $username && $row['password'] === $password) {
            $_SESSION['username'] = $row['username'];
            header('location: ../../pages/index.php');
            exit();
        } else {
            header('location: ../../index.php?error=Incorrect Password or Email');
        }
    } else {
        header('location: ../../index.php?error=Incorrect Password or Email');
    }

}



