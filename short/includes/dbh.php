<?php
//database connection file
$dbhost = "localhost";
$username= "root";
$password="";
$db="short";
$conn = mysqli_connect($dbhost,$username,$password,$db);
if(!$conn){
die("connection failed" . mysqli_connect_error() );
}


?>