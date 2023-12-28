<?php
session_start();
include_once("../database/dbconn.php");

if (isset($_POST["USERNAME"]) && isset($_POST["PASSWORD"])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['USERNAME']);
    $password = md5(validate($_POST['PASSWORD']));




    $select = "SELECT * FROM `admin` WHERE admin_username ='$username' AND admin_password = '$password' ";
    $result = $conn->query($select);

  if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row["admin_username"] === $username && $row["admin_password"] === $password) {
            $_SESSION['admin_username'] = $row['admin_username'];
            header('location: ../home.php');
            exit();
        } else {
            header('location: ../login.php?error=Incorrect Password or Username');
            exit();
        }
    } else {
        header('location: ../login.php?error=Incorrect Password or Username');
        exit();
    }
}
?>