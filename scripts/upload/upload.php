<?php
session_start();
require_once('../../db.php');

// function for trimming strings
function validate($file)
{
    $file = trim($file);
    $file = stripslashes($file);
    $file = htmlspecialchars($file);
    $file = strtolower($file);
    return str_replace(" ", "", $file);
}

if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {


    // getting all the values from our html form
    $uploader = $_SESSION['full_name'];
    $title = ucwords($_POST["title"]);
    $author = ucwords($_POST["authors"]);
    $category = $_POST["category"];
    $strand = $_POST["strand"];
    $description = ucfirst($_POST["description"]);
    $upload_dir = "../../pdfs/";
    $pdf_name = validate($_FILES["pdfFile"]["name"]);
    $upload_file = $upload_dir . validate(basename($_FILES["pdfFile"]["name"]));
    $extension = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));

// Check if the file already exists in the upload directory
    if (file_exists($upload_file)) {
        $filename = pathinfo($upload_file, PATHINFO_FILENAME);
        $counter = 1;

        // Append a letter until a unique filename is found
        while (file_exists($upload_file)) {
            $new_filename = $filename . "_" . $counter;
            $upload_file = $upload_dir . $new_filename . "." . $extension;
            $counter++;
        }

        $pdf_name = $new_filename . "." . $extension;
    }
}
// Now you can proceed to move the uploaded file and insert into the database
move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $upload_file);
mysqli_query($conn, "INSERT INTO researches(uploader, title, authors, category, strand, description, pdf_name)VALUES ('$uploader','$title', '$author', '$category', '$strand', '$description', '$pdf_name')");
header("location: ../../pages/upload.php?success=Uploaded Successfully!");


