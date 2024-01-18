<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACLC</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo1.png" />
    <link rel="stylesheet" href="assets/css/index.css?v=<?php echo time(); ?>">
    <!-- The appended timestamp in the CSS/JS file's URL serves to bypass browser caching, 
    ensuring that the updated stylesheet is fetched instead of using a cached version. -->

</head>

<body>
    <!-- container -->
    <div class="container" id="container">


        <!-- sign up -->
        <div class="form-container sign-up-container">
            <form action="./scripts/authentication/signup.php" method="POST">
                <h1>Create Account</h1>
                <!-- we will use this 3 names inside our signup.php -->
                <input type="text" placeholder="Username" name="USERNAME" required />
                <input type="email" placeholder="Gmail" name="EMAIL" required />
                <input type="password" placeholder="Password" name="PASSWORD" required />
                <button type="submit" name="">Sign Up</button>
                <!-- We get the name tag to use it to php and do something to it -->
                <!-- once clicked it will go to /scripts/authenticaion/signup.php -->
            </form>
        </div>
        <!-- /sign up -->


        <!-- sign in -->
        <div class="form-container sign-in-container">
            <form action="./scripts/authentication/signin.php" method="POST">
                <h1>Sign in</h1>
                <input type="text" placeholder="Username" name="USERNAME" required />
                <input type="password" placeholder="Password" name="PASSWORD" required />
                <button type="submit">Sign In</button>
                <!-- once clicked it will go to /scripts/authenticaion/signup.php -->
            </form>
        </div>
        <!-- /sign in -->


        <!-- overlay -->
        <div class="overlay-container">
            <div class="overlay">


                <!-- overlay sign in -->
                <div class="overlay-panel overlay-left">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <!-- /overlay sign in -->


                <!-- overlay sign up -->
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
                <!-- /overlay sign up -->


            </div>


        </div>
        <!-- /overlay -->
    </div>
    <!-- /container -->
    <script type="module" src="assets/js/index.js?v=<?php echo time(); ?>"></script>
    <!-- <script src="./scripts/sweetalert.js"></script> -->





    </script>
</body>

</html>