<?php
session_start();

if (isset($_SESSION['full_name'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Upload</title>
        <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
        <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="../assets/css/upload.css"/>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
        <a class="navbar-brand ms-5" href="repository.php">
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

    <div class="form-container mt-4 mx-5">
        <h3 class="text-black ms-5">Upload Research</h3>
        <form class="mt-1" action="../scripts/upload/upload.php" method="POST">
            <div class="mx-3">
                <div class="row g-2 mt-2 justify-content-around">
                    <div class="col-sm-5 me-5">
                        <label for="title">Enter your Research Title</label>
                        <input type="text" class="form-control mt-1 border border-0 input"
                               placeholder="ex. ACLC Research Hub" required id="title" name="title"/>
                    </div>
                    <div class="col-sm-5">
                        <label for="">Enter Research Category</label>
                        <!--                        <input type="text" class="form-control mt-1 border border-0 input"-->
                        <!--                               placeholder="ex. Technologies, Psychology, Science, etc" required/>-->
                        <select class="form-select mt-1" aria-label="Default select example">
                            <option selected disabled>Select Categories</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mx-3">
                <div class="row g-2 mt-2 justify-content-around">

                    <div class="col-sm-5 me-5">
                        <label for="PASSWORD">Enter the Authors</label>
                        <input type="text" class="form-control mt-1 border border-0 input"
                               placeholder="ex. Jerome Infante, Boboy Infnte, ..." required/>
                    </div>

                    <div class="col-sm-5">
                        <label for="">Enter Research Category</label>

                        <select class="form-select mt-1" aria-label="Default select example">
                            <option selected disabled>Select Categories</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mx-2 mt-3">
                <div class="mx-5">
                    <label for="exampleFormControlTextarea1">Enter a Description</label>
                    <textarea class="form-control border border-0 input" rows="3"
                              placeholder="This research is about..."></textarea>
                </div>
            </div>

            <div class="mt-4 mx-5">
                <label for="UploadResearchPDF"></label>
                <input placeholder="Upload" type="file" id="UploadResearchPDF"/>
            </div>
            <button type="button" class="btn btn-primary mx-5 mt-3" id="submitButton">SUBMIT</button>
        </form>
    </div>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/upload.js"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>