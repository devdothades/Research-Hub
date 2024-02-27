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
        <link rel="stylesheet" href="../../assets/update_repo.css?=<?php echo time() ?>">
        <link rel="stylesheet" href="../../assets/update_acc.css?=<?php echo time() ?>">
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
                    <a href="../accounts.php" class="nav-link active">
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
                    <a href="../messages.php" class="nav-link text-white">
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
        <div class="form-container">

            <!-- displays the error or success message when authenticating whether the password are incorrect and etc -->
            <?php if (isset($_GET["error"])) { ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?php echo $_GET['error'] ?>
                </div>
            <?php } ?>
            <?php if (isset($_GET["success"])) { ?>
                <div class="alert alert-success text-center" role="alert">
                    <?php echo $_GET['success'] ?>
                </div>
            <?php } ?>

            <?php
            require_once ('../../../db.php');
            $id = $_GET['id'];
            $query = mysqli_query($conn,"SELECT * FROM accounts WHERE id=$id");

            while ($row = mysqli_fetch_assoc($query)) : ?>

            <!-- start of the form tag where all data are going to signup.php and perform the backend logic -->
            <form class="mt-1" action="../../scripts/crud/update_account.php" method="POST">
                <div class="form-group">
                    <label for="FULL_NAME">Enter your Full name</label>
                    <input id="EMAIL" type="text" class="form-control mt-1 input" placeholder="ex. Warner Kayleigh "
                           name="FULL_NAME" required value="<?php echo $row['full_name']?>"/>
                </div>
                <div class="form-group mt-2">
                    <label for="EMAIL">Enter your Email</label>
                    <input id="EMAIL" type="email" class="form-control mt-1 input"
                           placeholder="ex. warnerkayleigh@gmail.com" name="EMAIL" required value="<?php echo $row['email']?>"/>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="PASSWORD">Enter your Password</label>
                        <input id="PASSWORD" type="password" class="form-control mt-1 input" placeholder="********"
                               name="PASSWORD" required/>
                    </div>
                    <div class="col">
                        <label for="RE_PASSWORD">Confirm Password</label>
                        <input id="PASSWORD" type="password" class="form-control mt-1 input" placeholder="********"
                               name="RE_PASSWORD" required/>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <?php endwhile; ?>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary form-control fw-bold">
                        UPDATE
                    </button>
                </div>
            </form>

        </div>


        <script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>


    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>
