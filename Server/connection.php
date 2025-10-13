<?php
$username = "root";
$psw="";
$server ="localhost";
$db="php-project";
$con= mysqli_connect($server,$username,$psw,$db,3306);
if(!$con){

    echo"<aleart>connect success</aleart>";
}



?>