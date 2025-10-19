<?php
$username = "root";
$psw = "";
$server = "localhost";
$db = "php-project";

$con = mysqli_connect($server, $username, $psw, $db, 3306);

if ($con) {
    echo "<script>alert('connect success')</script>";
} else {
    echo "<script>alert('connect failed')</script>";
}
?>
