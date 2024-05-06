<?php 
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "my"; 
 
$con = mysqli_connect($server, $username, $password, $dbname); 
 
if(!$con){ 
    die("Connection Fialed". mysqli_connect_error()); 
} 
?>