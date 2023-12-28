<?php

require_once("../database/dbconn.php");

function val($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = val($_POST['FULLNAME']);
$gmail = val($_POST['GMAIL']);
$number = val($_POST['NUMBER']);
$hometown = val($_POST['HOMETOWN']);
$grade = val($_POST['GRADE']);
$section = val($_POST['SECTION']);
$strand = val($_POST['STRAND']);
$id = val($_POST['id']);

$sql = "UPDATE `student` SET  `fullname` = '$name', `gmail` = '$gmail', `phoneNumber` = '$number', `hometown` = '$hometown', `grade` = $grade, `section` = '$section', `strand` = '$strand' WHERE id= $id";

if (empty($name)) {
    header("location:../update.php?error=Name is Required");
} else if (empty($gmail)) {
    header("location: ../update.php?error=Gmail is Required");
} else if (empty($number)) {
    header("location: ../update.php?error=Cellphone is Required");
} else if (empty($hometown)) {
    header("location: ../update.php?error=Hometown is Required");
} else if (empty($grade)) {
    header("location: ../update.php?error=Grade is Required");
} else if (empty($section)) {
    header("location: ../update.php?error=Section is Required");
} else if (empty($strand)) {
    header("location: ../update.php?error=Strand is Required");
} else if (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
    header("location: ../update.php?error=Gmail is Invalid");
} else {
    mysqli_query($conn, $sql);
    header("location: ../update.php?success=Update Successfully!");
}


?>
