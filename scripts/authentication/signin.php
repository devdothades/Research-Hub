<!-- 
1. **Session Setup:**
   - Initiates a session to store user data.

2. **Data Validation Function:**
   - Defines a `validate` function to sanitize input data.

3. **Form Data Retrieval:**
   - Retrieves and validates `USERNAME` and `PASSWORD` from a login form.

4. **Password Hashing:**
   - Hashes the password using MD5 for comparison with the database.

5. **Database Query:**
   - Queries the database to check if a user with the provided username and hashed password exists.

6. **Authentication Check:**
   - If a single matching user is found, sets a session variable and redirects to the home page.
   - If not authenticated, displays an error message and a link to go back to the login page. 
-->



<?php
// starting our session for our user
session_start();

// importing database for queries
require_once('../db.php');

if (isset($_POST["USERNAME"]) && isset($_POST["PASSWORD"])) {

    // The validate function trims whitespace, removes backslashes,
    //  and converts special characters to HTML entities in the input data, making it safer for use in a web application.
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // name="USERNAME" we get from html signin
    $username = validate($_POST['USERNAME']);
    // name="PASSWORD" we get from html signin
    //  hasing our password to meet the same data in our database.
    // if we not implement the hashing this will result in "Incorrect Password"
    $password = md5(validate($_POST['PASSWORD']));



    // we are selecting all data from users table 
    $select = "SELECT * FROM `users` WHERE `username` ='$username' AND `password` = '$password' ";
    // storing the query inside a variable
    $result = $conn->query($select);

    //  Checks if there is exactly one row in the result set obtained from a MySQLi query ($result).
    //  This typically means that a user with the provided username exists in the database
    if (mysqli_num_rows($result) == 1) {
        // Fetches the associative array representing the data of the user from the result set.
        $row = mysqli_fetch_assoc($result);
        // Compares the provided username and password with the values retrieved from the database.
        // If they match, the user is considered authenticated
        if ($row["username"] === $username && $row["password"] === $password) {
            //  Sets a session variable to store the authenticated username.
            $_SESSION['username'] = $row['username'];
            header('location: ../../pages/home.php');
            exit();
        } else {
            echo '<div class="modal-container">
    <div class="modal-header">
      Oppss...
    </div>
    <div class="modal-content">
      <p>Incorrect Password or Username</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
        }
    } else {
        echo '<div class="modal-container">
    <div class="modal-header">
      Oppss...
    </div>
    <div class="modal-content">
      <p>Incorrect Password or Username</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
    }
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