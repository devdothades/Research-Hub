<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="../styles/register.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form id="register" action="./functions/register_func.php" method="post" class="input-group">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error'] ?></p>

                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success'] ?></p>

                <?php } ?>
                <input type="text" class="input-field" placeholder="Username" name="USERNAME" />
                <input type="text" class="input-field" placeholder="Gmail" name="GMAIL" />
                <input type="password" class="input-field" placeholder="Password" name="PASSWORD" />
                <button type="submit" class="submit-btn" name="REGISTER-BTN">Register</button>
                <a href="login.php">Login Here!</a>
            </form>
        </div>
    </div>
</body>

</html>