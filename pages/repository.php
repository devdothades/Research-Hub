<?php
session_start();

if (isset($_SESSION['username'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Repository</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/logo1.png" />
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/repository.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <!-- GitHub logo and brand link -->
                <a class="navbar-brand" href="home.php">
                    <img src="../assets/img/icons/arrow.svg" alt="">
                    <img src="../assets/img/aclc.png" alt="ACLC Logo" height="30">
                </a>

                <!-- Navbar toggler for small screens -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="upload.php">Upload</a>
                        </li>
                    </ul>

                    <!-- Search bar -->
                    <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">
                            <img src="../assets/img/icons/search.svg" alt="Search Icon">
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container repository">
            <h2>Repositories</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Strand</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                   <?php ?>
                </tbody>
            </table>
        </div>

        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>