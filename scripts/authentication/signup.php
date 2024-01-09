<?php

require_once('../db.php');

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST["USERNAME"]);
$gmail = validate($_POST["EMAIL"]);

$password_hash = validate($_POST["PASSWORD"]);
$password = md5($password_hash);


$select = "SELECT * FROM `users` WHERE username ='$username' AND gmail = '$gmail' ";

$query = mysqli_query($conn, $select);

if (strlen($password_hash) < 7) {
    echo '<div class="modal-container">
    <div class="modal-header">
      Oppss...
    </div>
    <div class="modal-content">
      <p>Password must be 8 character</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
    echo '<div class="modal-container">
    <div class="modal-header">
      Oppss...
    </div>
    <div class="modal-content">
      <p>Invalid Gmail</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
} else if (mysqli_num_rows($query) > 0) {
    echo '<div class="modal-container">
    <div class="modal-header">
    Oppss...
    </div>
    <div class="modal-content">
    <p>Account Already Registered</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
} else {
    mysqli_query($conn, "INSERT INTO users (`username`, `gmail`, `password`) VALUE ('$username', '$gmail', '$password')");
    echo '<div class="modal-container">
    <div class="modal-header">
      DONE
    </div>
    <div class="modal-content">
      <p>Account Succesfully Created!</p>
    </div>
    <a class="modal-close" href="../../index.php">Sign in Now!</a>
    </div>';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .modal-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .modal-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .modal-content {
            margin-bottom: 20px;
        }

        .modal-close {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

</body>

</html>