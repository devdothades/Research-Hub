<?php
session_start();

if (isset($_SESSION['full_name'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Repository</title>
        <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
        <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="../assets/css/repository.css"/>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
        <a class="navbar-brand ms-5" href="home.php">
            <h5>Research<span class="text-primary">Hub</span></h5>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./home.php">Contact</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="repository.php">Repository</a>
                </li>
            </ul>

            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <button class="nav-link" id="logout">
                        <img src="../assets/img/icons/logout.svg" alt="logout button" height="25"/>
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="container-fluid mb-5 ">
            <div class="d-inline" id="browse">
                <h3 class="text-black d-inline">Browse Researches</h3>
            </div>
            <div class="d-inline">
                <a class="btn btn-primary" href="./search.php">Search</a>
                <a class="btn btn-primary" href="./upload.php">Upload</a>
            </div>
        </div>

        <div class="row container-fluid">
            <?php

            require_once ('../db.php');

            $query = mysqli_query($conn, "SELECT * FROM researches;");

            while ($row = mysqli_fetch_assoc($query)) : ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="../assets/img/logo/logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'] ?></h5>
                            <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">View</a>
                            <p>Uploaded by: <strong><?php echo $row['uploader']?></strong></p>
                            <p>Date: <strong><?php echo $row['created_at']?></strong></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>


        <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../js/repository.js"></script>
    </body>

    </html>

    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>