<?php
session_start();

if (isset($_SESSION['full_name'])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Repository</title>
        <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
        <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="../assets/css/view.css?=<?php echo time()?>"/>
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


    <?php
    require_once ('../db.php');

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM researches WHERE id='$id'");
    $query_comment = mysqli_query($conn, "SELECT * FROM comments WHERE repository='$id'");

    while ($row = mysqli_fetch_assoc($query)) : ?>

    <div class="form-container mt-4 mx-5">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h3 class="text-black">
                    <?php echo $row['title'] ?>
                </h3>
                <p class="mb-0"><strong>Uploaded by: </strong> <?php echo $row['uploader'] ?></p>
                <p class="mb-0"><strong>Author: </strong> <?php echo $row['authors'] ?></p>
                <p class="mb-0"><strong>Strand: </strong> <?php echo $row['strand'] ?></p>
                <p class="mb-0"><strong>Published: </strong><?php echo $row['created_at'] ?></p>
                <p>
                    <strong>Categories: </strong> <?php echo $row['category'] ?>
                </p>
                <p>
                    <strong>Description:</strong> <?php echo $row['description'] ?>
                </p>

                <a class="btn btn-primary" href="../scripts/download/download.php?file=<?php echo $row['pdf_name']?>">Download</a>
            </div>
            <?php endwhile; ?>


            <div class="col-xs-6 col-md-4 border comment-container">
                <h5 class="text-black">Comments</h5>
                <div class="scrollable-comments">
                    <?php while ($row_comment = mysqli_fetch_assoc($query_comment)) : ?>
                        <div class="card mb-4">
                            <p class="m-1"><?php echo $row_comment['comment'] ?></p>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <p class="small mb-0 ms-2"><?php echo $row_comment['name'] ?></p>

                                    </div>
                                    <p class="small mb-0 ms-2"><?php echo $row_comment['time'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="add-comment">
                    <form action="../scripts/comment/comment.php" method="post">
                        <div class="form-group">
                            <textarea class="form-control mb-2" id="comment" rows="1"
                                      placeholder="Add Comment..." name="comment" required></textarea>
                        </div>
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/view.js?=<?php echo time()?>"></script>
    </body>

    </html>
    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>