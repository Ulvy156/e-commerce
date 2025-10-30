<?php
$username = "root";
$psw = "";
$server = "127.0.0.1";
$db = "php-project";

$con = mysqli_connect($server, $username, $psw, $db, 3306);

if(!$con){
    echo "connect fail ";
}
?>
