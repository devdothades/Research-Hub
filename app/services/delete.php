<?php

require_once("../database/dbconn.php");

if (isset($_GET["id"])) {

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM student WHERE id=$id");
    header("location: ../dashboard.php");
}
?>