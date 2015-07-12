<?php 



$username = "root";
$password = "";
$hostname = "localhost";
$dbname="event";
$connect=mysqli_connect($hostname, $username, $password,$dbname) or die("Error " . mysqli_error($connect));
?>