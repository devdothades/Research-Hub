<?php

// this code is for downloading a pdf file

$file = basename($_GET['file']);
$file_path = '../../pdfs/' . $file;


if(file_exists($file_path)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    header('Content-Length: ' . filesize($file_path));
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Expires: 0');
    readfile($file_path);
}




