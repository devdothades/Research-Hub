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
        <link rel="stylesheet" href="../assets/css/search.css?=<?php echo time()?>"/>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
        <a class="navbar-brand ms-5" href="home.php">
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
                    <button class="nav-link" id="logout">
                        <img src="../assets/img/icons/logout.svg" alt="logout button" height="25"/>
                    </button>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="container-fluid mb-5 ">
            <form class="row row-cols-lg-auto g-3 align-items-center" method="post" action="search.php">
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                               placeholder="Search" name="search">
                    </div>
                </div>
                <div class="col-12">
                    <select class="form-select" id="inlineFormSelectPref" name="category">
                        <option selected disabled>Category</option>
                        <option value="Natural Sciences">Natural Sciences</option>
                        <option value="Social Sciences">Social Sciences</option>
                        <option value="Humanities">Humanities</option>
                        <option value="Engineering & Technology">Engineering & Technology</option>
                        <option value="Health Sciences">Health Sciences</option>
                        <option value="Environmental Sciences">Environmental Sciences</option>
                        <option value="Mathematics & Statistics">Mathematics & Statistics</option>
                        <option value="Business & Economics">Business & Economics</option>
                        <option value="Education">Education</option>
                        <option value="ICT">Information and Communication Technology</option>
                        <option value="Agricultural & Environmental Sciences">Agriculture & Environmental Sciences
                        </option>
                        <option value="Law & Legal Studies">Law & Legal Studies</option>
                        <option value="Fine Arts & Performing Arts">Fine Arts & Performing arts</option>
                        <option value="Psychology & Behavioral Sciences">Psychology & Behavioral Sciences</option>
                        <option value="Space & Planetary Sciences">Space & Planetary Sciences</option>
                    </select>
                </div>

                <div class="col-12">

                    <select class="form-select" id="inlineFormSelectPref" name="strand">
                        <option selected disabled>Strand</option>
                        <option value="TVL">TVL</option>
                        <option value="HUMMS">HUMMS</option>
                        <option value="GAS">GAS</option>
                        <option value="STEM">STEM</option>
                        <option value="ABM">ABM</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>


        <div class="row container-fluid">
            <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                require_once ('../db.php');

                $search = ucwords($_POST['search']);
                $category = $_POST['category'];
                $strand = $_POST['strand'];

                $query = mysqli_query($conn, "SELECT * FROM researches WHERE title='$search' OR category='$category' OR strand='$strand'");


                while ($row = mysqli_fetch_assoc($query)) : ?>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="../assets/img/logo/logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                                <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">View</a>
                                <p>Uploaded by: <strong><?php echo $row['uploader'] ?></strong></p>
                                <p>Date: <strong><?php echo $row['created_at'] ?></strong></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php } ?>
        </div>


    </div>

    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/search.js"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>