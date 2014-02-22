<?php 
//db connection
if(!isset($connection_status)){
$connection_status = false;
}

$server = 'localhost';
$dbName = 'test';
$dsn = "mysql:host=".$server.";dbname=".$dbName;
$user = 'root';
$pass = '';
$db = new PDO($dsn, $user, $pass);
if($db){
  $connection_status = true;
}
?>