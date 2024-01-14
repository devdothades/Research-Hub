<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="test.php" method="post" enctype="multipart/form-data">
    Select PDF file to upload:
    <input type="file" name="pdfFile" id="pdfFile">
    <input type="submit" value="Upload PDF" name="submit">
</form>

</body>
</html>

<?php 

require_once('scripts/db.php');

$fileName = $_FILES["pdfFile"]["name"];
$fileData = file_get_contents($_FILES["pdfFile"]["tmp_name"]);

// Prepare and execute the SQL query to insert the file into the database
$stmt = $conn->prepare("INSERT INTO pdf_files (file_name, file_data) VALUES (?, ?)");
$stmt->bind_param("ss", $fileName, $fileData);

if ($stmt->execute()) {
    echo "PDF file uploaded successfully.";
} else {
    echo "Error uploading PDF file: " . $stmt->error;
}


?>