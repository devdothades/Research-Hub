<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'hm0ejd74', 'ACLC');

function validate($file)
{
    $file = trim($file);
    $file = stripslashes($file);
    $file = htmlspecialchars($file);
    $file = strtolower($file);
    return str_replace(" ", "", $file);
}



if(isset($_SERVER["REQUEST_METHOD"]) == "POST") {
    $upload_dir = "./pdfs";
    $upload_file = validate($_FILES['pdfFile']['name']);
    $extension = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));

    if(!$extension == "pdf"){

    }else{

    }

}
