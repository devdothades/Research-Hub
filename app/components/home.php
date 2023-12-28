<?php
session_start();

if (isset($_SESSION['admin_username'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <link rel="stylesheet" href="../styles/home.css?v=<?php echo time(); ?>" />
    </head>

    <body>
        <header class="header">
            <h2 class="logo">Home</h2>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="add.php">Add</a>
                <a href="dashboard.php">Dashboard</a>
                <a href="../portfolio/index.html">Portfolio</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>

        <div class="container">
            <div class="welcome">
                <h1>Welcome back, <?php echo $_SESSION['admin_username']; ?>!</h1>
                <div class="paragraph">
                    In a bustling educational environment, managing student
                    information efficiently and effectively poses a significant
                    challenge. The existing manual methods of record-keeping and
                    student data management are prone to errors, time-consuming,
                    and lack the scalability needed to accommodate the growing
                    student population. Educational institutions, such as
                    schools, face the need for a streamlined and automated
                    system that can handle various aspects of student management
                    seamlessly.
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
} else {
    header("Location: login.php");
    exit();
}
?>