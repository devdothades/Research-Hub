<?php
session_start();

if (isset($_SESSION['full_name'])) {

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
    <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/search.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
    <a class="navbar-brand ms-5" href="#">
        <h5>Research<span class="text-primary">Hub</span></h5>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="home.php">About</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="home.php">Contact</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="repository.php">Repository</a>
            </li>
        </ul>

        <ul class="navbar-nav me-5">
            <li class="nav-item">
                <a class="nav-link" href="../scripts/authentication/logout.php">
                    <img src="../assets/img/icons/logout.svg" alt="logout button" height="25"/>
                </a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>