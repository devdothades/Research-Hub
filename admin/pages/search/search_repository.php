<?php
session_start();

if (isset($_SESSION['username'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content=""/>
        <title>Admin</title>
        <link
                rel="stylesheet"
                href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css"
        />

        <link href="../../assets/sidebars.css" rel="stylesheet"/>
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
        <div class="container mt-5 overflow-auto">
            <h2>Search for Repository</h2>
            <form action="search_repository.php" method="post">
                <input type="text" name="search" placeholder="Search for Repository">
                <select name="category">
                    <option selected disabled>Category</option>
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
                    <option value="Agricultural & Environmental Sciences">Agriculture & Environmental Sciences
                    </option>
                    <option value="Law & Legal Studies">Law & Legal Studies</option>
                    <option value="Fine Arts & Performing Arts">Fine Arts & Performing arts</option>
                    <option value="Psychology & Behavioral Sciences">Psychology & Behavioral Sciences</option>
                    <option value="Space & Planetary Sciences">Space & Planetary Sciences</option>
                </select>
                <select name="strand">
                    <option selected disabled>Strand</option>
                    <option value="TVL">TVL</option>
                    <option value="HUMMS">HUMMS</option>
                    <option value="GAS">GAS</option>
                    <option value="STEM">STEM</option>
                    <option value="ABM">ABM</option>
                </select>
                <input type="submit" value="search" class="btn btn-primary">
            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Uploader</th>
                    <th>Title</th>
                    <th>Strand</th>
                    <th>Category</th>
                    <th>Published</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    require_once ('../../../db.php');

                    $search = ucwords($_POST['search']);
                    $category = $_POST['category'];
                    $strand = $_POST['strand'];

                    $query = mysqli_query($conn, "SELECT * FROM researches WHERE title='$search' OR category='$category' OR strand='$strand'");


                    while ($row = mysqli_fetch_assoc($query)) : ?>
                        <tr>

                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['uploader'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['strand'] ?></td>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a type="button" class="btn btn-primary btn-sm" href="">
                                    View
                                </a>
                                <a type="button" class="btn btn-warning btn-sm" href="">
                                    Update
                                </a>
                                <a type="button" class="btn btn-danger btn-sm" href="">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/sidebars.js"></script>
    </body>
    </html>

    <?php
} else {
    header("Location: ../index.php");
    exit();
}
?>