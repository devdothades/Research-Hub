<?php
//$conn = mysqli_connect("localhost","root","hm0ejd74","ACLC");
//
//function validate($data) : string
//{
//    $data = ucwords($data);
//    return str_replace('@gmail.com', '', $data);
//}
//
//$name = $_POST['sql_table'];
//
//$sql_name = validate($name);
//
//
//$sql_username = "CREATE TABLE $sql_name (
//        id INT AUTO_INCREMENT PRIMARY KEY,
//        comments VARCHAR(255) NOT NULL,
//        author VARCHAR(255) NOT NULL
//    )";
//
//if (mysqli_query($conn, $sql_username)) {
//    echo "Table $sql_name created successfully";
//    header('location: index.php');
//}else{
//    echo 'failed';
//}

$category = $_POST['category'];

echo $category;
