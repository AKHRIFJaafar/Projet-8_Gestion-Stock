<?php 
$dbServerName = "localhost:3306";
$dbUserName = "root";
$dbPassword = "12345";
$connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword);

if( ! $connect){
    exit('Could not connect');
}
echo 'Connect succesfully';
?>