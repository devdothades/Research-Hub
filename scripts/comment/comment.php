<?php
session_start();

$conn = mysqli_connect("localhost", "root", "hm0ejd74", "ACLC");

if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $name = $_SESSION["full_name"];
    $comment = $_POST['comment'];
    $repository = $_POST['id'];

    mysqli_query($conn, "INSERT INTO comments(name, comment, repository) VALUES ('$name', '$comment', '$repository')");
    header("location:../../pages/view.php?id=$repository");
}
