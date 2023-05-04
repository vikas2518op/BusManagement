<?php
$hostname  = 'localhost';
$username = 'root';
$password='vikas2518';
$dbname = 'train';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname, 4306) or die("Error Connecting");
?>