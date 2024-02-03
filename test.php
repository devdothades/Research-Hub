<?php

$conn = mysqli_connect("localhost","root","hm0ejd74","ACLC");
function validate($data) : string
{
    $data = ucwords($data);
    return str_replace(' ', '', $data);
}
$name = validate("boboy infante") . time();

$sql = "CREATE TABLENAME $name;(
id int varchar autoincrement;
user varchar 255;

)";







