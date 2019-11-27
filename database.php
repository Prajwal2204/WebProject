<?php


$server = "localhost";
$username = "root";
$password = "";
$dbname = "login";


$connect = mysqli_connect($server,$username,$password,$dbname);

if(!$connect){
    die("COULD NOT CONNECT! ".mysqli_connect_error());
}


$sql = "CREATE TABLE IF NOT EXISTS table_test(
    ID INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username TINYTEXT NOT NULL,
    email TINYTEXT NOT NULL,
    pwd LONGTEXT NOT NULL,
    ph_num INT(10) NOT NULL,
    AGE int(3) NOT NULL,
    gender TINYTEXT NOT NULL,
    home_add LONGTEXT
    )";

$result = mysqli_query($connect,$sql) or die("COULD NOT CREATE ");