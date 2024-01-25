<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/logo.png" />
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/index.css?<?php echo time(); ?>" />
</head>

<body>
    <div class="form-container">
        <div class="text-center">
            <h1 class="text-black">
                Research<span class="text-primary">Hub</span>
            </h1>
            <p>Login to your account</p>
        </div>
        <form class="mt-5" action="./scripts/authentication/login.php" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required/>
            </div>
            <div class="form">
                <input type="password" class="form-control mt-3" placeholder="Enter your password" name="PASSWORD" required/>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary form-control fw-bold ">
                    LOGIN
                </button>
            </div>
        </form>
        <p class="text-center mt-2">Not registered yet? <a href="./signup.php">Sign up</a></p>
    </div>
    <script src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        <?php $error = isset($_GET['error']); ?>
        if (<?php echo $error ?>) {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
        }
    </script>
</body>

</html>