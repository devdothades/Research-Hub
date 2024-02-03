<?php
$conn = $conn = mysqli_connect("localhost","root","hm0ejd74","ACLC");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($password < 7){
        header('location: index.php?error=password must be 8 character');
    }else{
        mysqli_query($conn, "INSERT INTO `test`(username, password) VALUES('$username', '$password')");
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <form action="index.php" method="post" id="LOGIN">
        <input type="text" placeholder="username" name="username">
        <input type="password"placeholder="password" name="password">
    </form>
    <button id="submit">login</button>
</head>
<body>

<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="index.js"></script>
</body>
</html>