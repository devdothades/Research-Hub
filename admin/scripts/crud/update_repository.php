<?php

require_once ('../../../db.php');

if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {

    $id = $_POST['id'];

    $title = ucwords($_POST["title"]);
    $author = ucwords($_POST["authors"]);
    $category = $_POST["category"];
    $strand = $_POST["strand"];
    $description = ucfirst($_POST["description"]);

    echo $id;


    mysqli_query($conn, "UPDATE researches SET title = '$title' , authors = '$author' , category = '$category' , strand = '$strand' , description = '$description' WHERE id=$id");
    header("location: ../../pages/update/update_repository.php?success=Successfully Updated!");
}


