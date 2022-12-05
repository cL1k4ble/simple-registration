<?php

$sname ="sql.freedb.tech";
$uname ="freedb_dennis";
$password ="xJ38DZEH%cD2Q*r";

$db_name = "db_test";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "connection failed";
    exit();
}
