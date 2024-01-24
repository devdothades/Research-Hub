<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/logo.png" />
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
</head>

<body>
    <div class="form-container">
        <div class="text-center">
            <h1 class="text-black">
                Research<span class="text-primary">Hub</span>
            </h1>
            <p>Login to your account</p>
        </div>
        <?php if (isset($_GET['error'])) { ?>
            <p class="bs-danger"><?php echo $_GET['error'] ?></p>

        <?php } ?>
        <p class="bs-danger-rgb">asdsad</p>
        <form class="mt-5" action="./scripts/authentication/login.php" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter your gmail" name="EMAIL" />
            </div>
            <div class="form">
                <input type="password" class="form-control mt-3" placeholder="Enter your password" name="PASSWORD" />
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary form-control">
                    Login
                </button>
            </div>
        </form>
    </div>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>

<?php


?>