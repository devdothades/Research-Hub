<?php

require_once('../../../db.php');

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT pdf_name FROM researches WHERE id=$id");

while ($row = mysqli_fetch_assoc($query)){
    $pdf_name = $row['pdf_name'];
}
$file_path = '../../../pdfs/' . $pdf_name;

unlink($file_path);

mysqli_query($conn, "DELETE FROM comments WHERE repository='$id'");
mysqli_query($conn, "DELETE FROM researches WHERE id=$id");
header("location: ../../pages/index.php");
