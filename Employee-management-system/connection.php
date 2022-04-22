<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tdh";

 
$cookie_time = (3600 * 24 * 30); // 30 days

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>