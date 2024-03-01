<?php

require_once ('../../../db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $comment = $_POST['comment'];

    mysqli_query($conn, "UPDATE comments SET comment = '$comment' WHERE id=$id");
    header("location: ../../pages/update/update_comment.php?success=Successfully Updated!");

}