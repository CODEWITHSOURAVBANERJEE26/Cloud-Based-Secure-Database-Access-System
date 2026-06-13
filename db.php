<?php

$host="localhost";
$user="root";
$password="";
$database="security_db";

$conn=mysqli_connect(
$host,
$user,
$password,
$database
);

if(!$conn)
{
die("Connection Failed");
}

?>
