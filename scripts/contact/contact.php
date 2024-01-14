<?php
require_once('../db.php');

$name = $_POST['NAME'];
$gmail = $_POST['GMAIL'];
$phonenumber = $_POST['PHONE_NUMBER'];
$message = $_POST['MESSAGE'];


mysqli_query($conn, "INSERT INTO `messages` (`name`, `gmail`, `phonenumber`, `message`) VALUES ('$name', '$gmail', '$phonenumber', '$message')");
echo '<div class="modal-container">
    <div class="modal-header">
      Message Sent!
    </div>
    <div class="modal-content">
      <p>Thank you for messaging us!</p>
    </div>
    <a class="modal-close" href="../../pages/home.php">Go back</a>
    </div>';





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