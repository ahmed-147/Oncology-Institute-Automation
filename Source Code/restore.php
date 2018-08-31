<?php

$filename  = 'C:/Users/Mohamed Ahmed/Desktop/db-backup.sql';
$DBhost   = 'localhost';
$DBuser   = 'root';
$DBpass   = 'root';
$DBName    = 'resturant';


$con = mysql_connect($DBhost,$DBuser,$DBpass);

if ($con !== false){
  // Load and explode the sql file
    
  mysql_select_db("$DBName");
  $f = fopen($filename,"r+");
  $sqlFile = fread($f,filesize($filename));
  $sqlArray = explode(';',$sqlFile);
    
  // Process the sql file by statements
  foreach ($sqlArray as $stmt) {
    if (strlen($stmt)>3){
        
         $result = mysql_query($stmt,$con);
    }
  }
}


?>
 