<!-- 

1. **Data Validation Function:**
   - Defines a `validate` function to sanitize input data.

2. **Form Data Retrieval:**
   - Retrieves and validates `USERNAME`, `EMAIL`, and `PASSWORD` from a signup form.

3. **Password Hashing:**
   - Hashes the password using MD5 for security.

4. **Database Queries:**
   - Executes two SELECT queries to check if the provided username or Gmail is already in use.
   - Results are stored in `$query_username` and `$query_gmail` variables.

5. **Validation Checks:**
   - Checks if the password length is less than 8 characters, displaying an error message if true.
   - Validates that the provided Gmail ends with "@gmail.com," displaying an error message if not.
   - Checks if the username or Gmail is already in use, displaying an error message if true.

6. **User Registration:**
   - If all validation checks pass, the user data is inserted into the database.
   - Displays a success message.

-->



<?php
// importing the database to use it in our queries
require_once('../db.php');
require_once('../script.php');

// The validate function trims whitespace, removes backslashes,
//  and converts special characters to HTML entities in the input data, making it safer for use in a web application.
function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// name="USERNAME" we get from html signup
$username = validate($_POST["USERNAME"]);
// name="EMAIL" we get from html signup
$gmail = validate($_POST["EMAIL"]);
// name="PASSWORD" we get from html signup
$password_hash = validate($_POST["PASSWORD"]);
// hasing the password for Security 
$password = md5($password_hash);

// Query for selecting all users where username and gmail and for both
$select_username = "SELECT * FROM `users` WHERE username ='$username'";
$select_gmail = "SELECT * FROM `users` WHERE gmail = '$gmail' ";
$select_all = "SELECT * FROM `users` WHERE username ='$username' AND gmail = '$gmail'";

// storing our query into a variable to use it to our condition if the username or gmail is already registered
$query_username = mysqli_query($conn, $select_username);
$query_gmail = mysqli_query($conn, $select_gmail);
$query_all = mysqli_query($conn, $select_all);

// strlen get the length of the password hash 
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
  // checks if the inputed gmail have @gmail.com 
} else if ((!preg_match('/@gmail\.com$/', $gmail))) {
  echo '<div class="modal-container">
    <div class="modal-header">
      Oppss...
    </div>
    <div class="modal-content">
      <p>Invalid Gmail</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
  // my_sqli_num_rows is a for loop and we will check each one of the data in database,
  //  if our inputed data from html input matches the data in database it will echo a message that account already registered,
  // if this condition is false it will execute the else statement
} else if (mysqli_num_rows($query_all) > 0) {
  echo '<div class="modal-container">
    <div class="modal-header">
    Oppss...
    </div>
    <div class="modal-content">
    <p>Account already registered</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
} else if (mysqli_num_rows($query_username) > 0) {
  echo '<div class="modal-container">
    <div class="modal-header">
    Oppss...
    </div>
    <div class="modal-content">
    <p>Username already taken</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
}else if (mysqli_num_rows($query_gmail) > 0) {
  echo '<div class="modal-container">
    <div class="modal-header">
    Oppss...
    </div>
    <div class="modal-content">
    <p>Gmail already in use</p>
    </div>
    <a class="modal-close" href="../../index.php">Go back</a>
    </div>';
}else {
  // stores the data into our database 
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