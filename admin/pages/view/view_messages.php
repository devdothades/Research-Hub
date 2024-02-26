<?php
session_start();

if (isset($_SESSION['username'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Repository</title>
        <link rel="shortcut icon" type="image/x-icon" href="../../.././assets/img/logo/logo.png"/>
        <link rel="stylesheet" href="../../.././node_modules/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="../../assets/view_repository.css?=<?php echo time() ?>"/>
        <link rel="stylesheet" href="../../assets/sidebars.css">
    </head>

    <body>

    <main class="d-flex flex-nowrap">
        <div
            class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark"
            style="width: 280px"
        >
            <a
                href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"
            >
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"/>
                </svg>
                <span class="fs-4">Admin</span>
            </a>
            <hr/>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link text-white" aria-current="page">
                        <img src="../../assets/git-alt.svg" alt="" class="bi pe-none me-2" width="16" height="16">

                        Repositories
                    </a>
                </li>
                <li>
                    <a href="../accounts.php" class="nav-link text-white">
                        <img src="../../assets/user.svg" alt="" class="bi pe-none me-2" width="16" height="16">

                        Accounts
                    </a>
                </li>
                <li>
                    <a href="../comments.php" class="nav-link text-white">
                        <img src="../../assets/comment-solid.svg" alt="" class="bi pe-none me-2" width="16" height="16">

                        Comments
                    </a>
                </li>
                <li>
                    <a href="../messages.php" class="nav-link active">
                        <img src="../../assets/message-solid.svg" alt="" class="bi pe-none me-2" width="16" height="16">
                        Messages
                    </a>
                </li>

            </ul>
            <hr/>
            <div class="dropdown">
                <a
                    href=""
                    class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img
                        src="../../assets/user.svg"
                        alt=""
                        width="32"
                        height="32"
                        class="rounded-circle me-2"
                    />
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="../../scripts/authentication/logout.php">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <?php
                        require_once('../../../db.php');

                        $id = $_GET['id'];
                        $query = mysqli_query($conn, "SELECT * FROM messages WHERE id='$id'");

                        while ($row = mysqli_fetch_assoc($query)) : ?>

                        <div class="centered-box bg-light p-4">
                            <h4 class=""><?php echo $row['email']?></h4>
                            <h4 class=""><?php echo $row['name']?></h4>
                            <p class="text-center"><?php echo $row['message']?></p>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="../../.././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>

    </html>


    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>
