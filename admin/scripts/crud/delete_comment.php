<?php


require_once('../../../db.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM comments WHERE id=$id");

header("location: ../../pages/comments.php");
