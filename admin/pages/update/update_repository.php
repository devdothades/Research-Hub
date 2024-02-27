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
        <link rel="stylesheet" href="../../assets/update_repo.css">
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
                    <a href="../index.php" class="nav-link active" aria-current="page">
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
        <div class="form-container mt-4 mx-5">
            <h3 class="text-black ms-5">Update Research</h3>
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

            <?php require_once('../../../db.php');
            $id = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * FROM researches WHERE id=$id");

            while($row = mysqli_fetch_assoc($query)) : ?>


            <form class="mt-1" action="../../scripts/crud/update_repository.php" method="POST" id="FORM">
                <div class="mx-3">
                    <div class="row g-2 mt-2 justify-content-around">
                        <div class="col-sm-5 me-5">
                            <label for="title">Enter your Research Title</label>
                            <input type="text" class="form-control mt-1 border border-0 input"
                                   placeholder="ex. ACLC Research Hub" required id="title" name="title" value="<?php echo $row['title']?>"/>
                        </div>
                        <div class="col-sm-5">
                            <label for="">Enter Research Category</label>
                            <select class="form-select mt-1" aria-label="Default select example" name="category" required>
                                <option selected disabled value="">Select Category</option>
                                <option value="Natural Sciences">Natural Sciences</option>
                                <option value="Social Sciences">Social Sciences</option>
                                <option value="Humanities">Humanities</option>
                                <option value="Engineering & Technology">Engineering & Technology</option>
                                <option value="Health Sciences">Health Sciences</option>
                                <option value="Environmental Sciences">Environmental Sciences</option>
                                <option value="Mathematics & Statistics">Mathematics & Statistics</option>
                                <option value="Business & Economics">Business & Economics</option>
                                <option value="Education">Education</option>
                                <option value="ICT">Information and Communication Technology</option>
                                <option value="Agricultural & Environmental Sciences">Agriculture & Environmental Sciences</option>
                                <option value="Law & Legal Studies">Law & Legal Studies</option>
                                <option value="Fine Arts & Performing Arts">Fine Arts & Performing arts</option>
                                <option value="Psychology & Behavioral Sciences">Psychology & Behavioral Sciences</option>
                                <option value="Space & Planetary Sciences">Space & Planetary Sciences</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mx-3">
                    <div class="row g-2 mt-2 justify-content-around">

                        <div class="col-sm-5 me-5">
                            <label for="PASSWORD">Enter the Authors</label>
                            <input type="text" class="form-control mt-1 border border-0 input"
                                   placeholder="ex. Jerome Infante, Boboy Infnte, ..." required name="authors" value="<?php echo $row['authors']?>"/>
                        </div>

                        <div class="col-sm-5">
                            <label for="">Enter your strand</label>

                            <select class="form-select mt-1" aria-label="Default select example" name="strand" required>
                                <option selected disabled value="">Select Category</option>
                                <option value="TVL">TVL</option>
                                <option value="HUMMS">HUMMS</option>
                                <option value="GAS">GAS</option>
                                <option value="STEM">STEM</option>
                                <option value="ABM">ABM</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class=" mt-3">
                    <div class="mx-5">
                        <label for="exampleFormControlTextarea1">Enter a Description</label>
                        <textarea class="form-control border border-0 input" rows="3"
                                  placeholder="This research is about..." name="description"><?php echo $row['description']?></textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <button class="btn btn-primary mx-5 mt-3" id="submit" type="submit">SUBMIT</button>
                <?php endwhile; ?>
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
