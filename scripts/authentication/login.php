<?php 
session_start();
require_once('../../db.php');

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = stripslashes($data);
    return $data;
}

if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
    $email = validate($_POST['EMAIL']); 
    $password = md5(validate($_POST['PASSWORD']));

    $select = "SELECT * FROM `accounts` WHERE `email`= '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);

        if($row['email'] === $email && $row['password'] === $password){
            $_SESSION['fullname'] = $row['fullname'];
            header('location: ../../pages/home.php');
            exit();
        }
        else{
            header('location: ../../index.php?error=Incorrect Password or Email');
        }
    }else{
        header('location: ../../index.php?error=Incorrect Password or Email');
    }

}