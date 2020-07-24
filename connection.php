<?php
$_SERVER="localhost";
$username="root";
$password="root";
$db="retrieve_database";

 
//create connection
  $connection= mysqli_connect($server,$username,$password,$db);
//check connection

if(!$connection){
    die("connection failed:".mysql_connect_error());
}

echo "connected successfully!"; 
?>