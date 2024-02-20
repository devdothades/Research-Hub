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




if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {

    $title = ucwords($_POST["title"]);
    $author = ucwords($_POST["authors"]);
    $category = $_POST["category"];
    $strand = $_POST["strand"];
    $description = ucfirst($_POST["description"]);

    $upload_dir = "pdfs/";
    $pdf_name = validate($_FILES["pdfFile"]["name"]);
    $upload_file = $upload_dir . validate(basename($_FILES["pdfFile"]["name"]));
    $extension = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));


    if ($extension != "pdf") {
        header("location: ../../pages/upload.php?error=File must be PDF Format");
    } else if (file_exists($upload_file)) {
        header("location: ../../pages/upload.php?error=File already exists");
    } else {
        move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $upload_file);
        mysqli_query($conn, "INSERT INTO researches(title, authors, category, strand, description, pdf_name)VALUES ('$title', '$author', '$category', '$strand', '$description', '$pdf_name')");
        header("location: ../../pages/upload.php?success=Uploaded Successfully!");
    }
}


//chmod("./pdfs/oraclasdasdaasdasde.pdf", 0644);
//unlink("./pdfs/oraclasdasdaasdasde.pdf");
