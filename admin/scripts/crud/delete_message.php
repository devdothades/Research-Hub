<?php

require_once ('../../../db.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM messages WHERE id=$id");

header("location: ../../pages/messages.php");