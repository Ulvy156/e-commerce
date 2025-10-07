<?php
$username = "root";
$psw="Rupp123$!";
$server ="localhost";
$db="php-project";
$con= mysqli_connect($server,$username,$psw,$db,3307);
if($con){
    echo "<aleart>connect success</aleart>";
}else{
    echo"<aleart>connect success</aleart>";
}



?>