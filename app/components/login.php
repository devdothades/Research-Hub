<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../styles/login.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form id="login" action="./functions/login_func.php" method="post" class="input-group">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error'] ?> </p>
                <?php } ?>
                <input type="text" class="input-field" placeholder="Username" name="USERNAME" />
                <input type="password" class="input-field" placeholder="Password" name="PASSWORD" />
                <button type="submit" class="submit-btn" name="LOGIN-BTN">Log In</button>
                <a href="register.php">Register Here!</a>
            </form>
        </div>
    </div>

</body>

</html>