<?php 

require_once('../../db.php');

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = stripslashes($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $gmail = validate(isset($_POST['GMAIL'])); 
    $password = validate(md5(isset($_POST['PASSWORD'])));

    $select = "SELECT * FROM `accounts` WHERE `gmail`= '$gmail' AND `password` = '$password'";
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        if($row['gmail'] === $gmail && $row['password'] === $password){
            $_SESSION['username'] = $row['username'];
            header('location: ../page/home.php');
        }
        else{
            header('location: ../../index.php?error=Incorrect Password or Gmail');
        }
    }else{
        header('location: ../../index.php?error=Incorrect Password or Gmail');
    }
}