<?php

require_once('../../../db.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM accounts WHERE id=$id");

header("location: ../../pages/accounts.php");
