<?php

//change the values of these variables according to your local machine
$hostname = 'localhost';
$username = 'root';
$password = 'hm0ejd74';
$database_name = 'ACLC';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if (mysqli_connect_errno()) {
    echo 'failed';
}
