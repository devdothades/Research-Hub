<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Research Hub</title>
    <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png"/>
    <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
<div class="form-container">
    <div class="text-center">
        <h1 class="text-black">
            Research<span class="text-primary">Hub</span>
        </h1>
        <p>Login to your account</p>
    </div>
    <!-- displays the error or success message when authenticating whether the password are incorrect and etc -->
    <?php if (isset($_GET["error"])) { ?>
        <div class="alert alert-danger text-center" role="alert">
            <?php echo $_GET['error'] ?>
        </div>
    <?php } ?>
    <form class="mt-3" action="./scripts/authentication/login.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control input" placeholder="Enter your Username" name="USERNAME" required />
        </div>
        <div class="form">
            <input type="password" class="form-control mt-3 input" placeholder="Enter your password" name="PASSWORD" required />
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary form-control fw-bold ">
                LOGIN
            </button>
        </div>
    </form>
</div>
<!-- bootstrap javascript -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>