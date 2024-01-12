<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "sql_database_edoc";
$port = 3306;

$database = mysqli_connect($server,$username,$password,$database,$port);

if(!$database){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>