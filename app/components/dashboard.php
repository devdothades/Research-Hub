<?php
session_start();
include_once("../app/database/dbconn.php");
$result = mysqli_query($conn, "SELECT * FROM `student`");
if (isset($_SESSION['admin_username'])) {



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="../styles/dashboard.css?v=<?php echo time(); ?>" />
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
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gmail</th>
                    <th>Phone</th>
                    <th>Hometown</th>
                    <th>Grade</th>
                    <th>Section</th>
                    <th>Strand</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1;
                while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>

                        <td><?php echo $row['fullname'] ?></td>
                        <td><?php echo $row['gmail'] ?></td>
                        <td><?php echo $row['phoneNumber'] ?></td>
                        <td><?php echo $row['hometown'] ?></td>
                        <td><?php echo $row['grade'] ?></td>
                        <td><?php echo $row['section'] ?></td>
                        <td><?php echo $row['strand'] ?></td>
                        <td>
                            <a href="./functions/delete.php?id=<?php echo $row['id']; ?>" class="button" id="delete">Delete</a>
                            <a href="update.php?id=<?php echo $row['id']; ?>" class="button" id="update">Update</a>
                        </td>

                    </tr>
                <?php $i++;
                endwhile; ?>
            </tbody>
        </table>
    </body>

    </html>

<?php
} else {
    header("Location: login.php");
    exit();
}
?>