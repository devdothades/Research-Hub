<?php
session_start();

if (isset($_SESSION['admin_username'])) {



?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>User Registration</title>
        <link rel="stylesheet" href="../styles/add.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <header class="header">
            <h2 class="logo">Add</h2>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="add.php">Add</a>
                <a href="dashboard.php">Dashboard</a>
                <a href="../portfolio/index.html">Portfolio</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>
        <div class="parent-container">
            <div class="container">
                <div class="title">Add Student</div>
                <div class="content">
                    <form action="./functions/add_student.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error'] ?></p>

                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success'] ?></p>

                        <?php } ?>
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name" name="FULLNAME">
                            </div>
                            <div class="input-box">
                                <span class="details">Gmail</span>
                                <input type="text" placeholder="Enter your Gmail" name="GMAIL">
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="number" placeholder="Enter your Phone Number" name="NUMBER">
                            </div>
                            <div class="input-box">
                                <span class="details">Hometown</span>
                                <input type="text" placeholder="Enter your Hometown" name="HOMETOWN">
                            </div>
                        </div>
                        <h4>Grade Level</h4>
                        <div class="Grade">
                            <div class="item">
                                <input type="radio" name="GRADE" value="11" id="11">
                                <label for="11">11</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="GRADE" value="12" id="12">
                                <label for="12">12</label>
                            </div>

                        </div>
                        <h4>Section</h4>
                        <div class="Section">
                            <div class="item">
                                <input type="radio" name="SECTION" value="A" id="A">
                                <label for="A">A</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="SECTION" value="B" id="B">
                                <label for="B">B</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="SECTION" value="C" id="C">
                                <label for="C">C</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="SECTION" value="D" id="D">
                                <label for="D">D</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="SECTION" value="E" id="E">
                                <label for="E">E</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="SECTION" value="F" id="F">
                                <label for="F">F</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="SECTION" value="G" id="G">
                                <label for="G">G</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="SECTION" value="H" id="H">
                                <label for="H">H</label>
                            </div>
                        </div>
                        <h4>Strand</h4>
                        <div class="strand">
                            <div class="item">
                                <input type="radio" name="STRAND" value="TVL" id="TVL">
                                <label for="TVL">TVL</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="STRAND" value="STEM" id="STEM">
                                <label for="STEM">STEM</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="STRAND" value="GAS" id="GAS">
                                <label for="GAS">GAS</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="STRAND" value="ABM" id="ABM">
                                <label for="ABM">ABM</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="STRAND" value="HUMMS" id="HUMMS">
                                <label for="HUMMS">HUMMS</label>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="add" name="add" class="btn">
                        </div>
                    </form>
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