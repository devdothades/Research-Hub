<?php
session_start();

if (isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION['username'] ?> </h1>
    <a href=".././scripts/authentication/logout.php">logout</a>
    
</body>
</html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>

