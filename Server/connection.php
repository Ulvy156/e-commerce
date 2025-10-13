<?php
$username = "root";
<<<<<<< HEAD
$psw="";
$server ="localhost";
$db="php-project";
$con= mysqli_connect($server,$username,$psw,$db,3306);
if(!$con){

=======
$psw="Rupp123$!";
$server ="localhost";
$db="php-project";
$con= mysqli_connect($server,$username,$psw,$db,3307);
if($con){
    echo "<aleart>connect success</aleart>";
}else{
>>>>>>> ulvy/main
    echo"<aleart>connect success</aleart>";
}



?>