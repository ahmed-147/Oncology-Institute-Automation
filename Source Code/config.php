<?php

$server_name = "localhost" ;
$username = "root" ;
$password = "root" ;
$database_name = "seci" ;

$conn=mysqli_connect($server_name,$username,$password,$database_name);

mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,"SET CHARACTER SET utf8");
    mysqli_query($conn,"SET COLLATION_CONNECTION = 'utf8_unicode_ci'");	

ini_set('max_execution_time', 100);

?>